<?php
require_once "../models/UserModel.php";
        
class UserController 
{
    //constructeur ?!
    public function homePage() {

        require_once "../views/Home.php";
    }
    public function index() {
        echo "index";
    }

    public function createUser() {


    }
    public function delete() {
        echo "delete de user";
    }
    public function loginPage() {

    }
}

