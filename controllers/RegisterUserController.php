<?php
class RegisterUserController 
{
    //constructeur ?!
    
    public function homePage() {
        require_once "../views/auth/Register.php";
    }
    public function index() {
        echo "index dans RegisterUserController";
    }
    public function create() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["subscribe"] == "S'inscrire") {
            $user_name = htmlspecialchars($_POST["nom"]);
            $user_email = htmlspecialchars($_POST["email"]);
            $user_password = htmlspecialchars($_POST["motdepasse"]);
            //Insertion d'un utilisateur
            $user = new UserModel();
            $user->create($user_name,$user_email, $user_password);
    
            $this->homePage();
    
        }
    
    }
}

