<?php
require_once "../models/UserModel.php";

class LoginController 
{
    private $user;
    
    //constructeur
    function __construct() {
        $this->user = new UserModel();
    }

    public function homePage() {
        require_once "../views/auth/Login.php";
    }
    public function show() {
        echo "show";
    }
    public function loginUser() {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $u_email = $this->form_input($_POST['user_email']);
            filter_var($u_email, FILTER_VALIDATE_EMAIL);
            $u_password = $this->form_input($_POST['password']);

            $theUser = $this->user->getOneUser($u_email);

            if(!empty($theUser)) {
                //On vérifie la conformité du mot de passe
                $verify = password_verify($u_password, $theUser['user_password']);
                if($verify === true) {
                    
                    session_start();

                    $_SESSION['userId'] = $theUser['id'];
                    $_SESSION['username'] = $theUser['user_name'];
                    $_SESSION['useremail'] = $theUser['user_email'];
                    $_SESSION['userRole'] = $theUser['user_role'];
                    $_SESSION['userCreation'] = $theUser['created_at'];

                    header("Location: /");
                    
                }else {
                    header("Location: /login-home?msg=Mot de passe incorrecte !");
                }
  
            }else {
                header("Location: /login-home?msg=Ce compte n'existe pas! ");
            }
        } 
    }
    public function logoutUser() {
        echo "logoutUser";
    }

    public function form_input($data) { // Méthode pour assainir les données entrées par l'utilisateur
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

