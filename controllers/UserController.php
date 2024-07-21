<?php
require_once "../models/UserModel.php";
        
class UserController 
{
    //constructeur
    private $user;

    function __construct() {
        $this->user = new UserModel();
    }

    public function homePage() {

        require_once "../views/Home.php";
    }
    public function index() {
        return $this->user->getAllUsers();
     
    }
    public function create() {
        echo "createUser";
    }
    public function delete($id) {
        $this->user->deleteUser($id);

        $allUsers = $this->user->getAllUsers(); //Récupération de tous les utilisateurs

        require_once "../views/admin/Dashboard.php";

    }
    public function getUser() {


    }
}

