<?php
require_once "../models/UserModel.php";
        
class UserController 
{
    private $user;
    
    //constructeur
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

        header("Location: /dashboard-home");

    }
    public function getUser() {


    }
}

