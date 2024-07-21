<?php
require_once "../models/UserModel.php";

class DashboardController
{
    
    private $user;
    //constructeur

    function __construct() {
        $this->user = new UserModel();
    }

    public function homePage() {
        $allUsers = $this->user->getAllUsers(); //Récupération de tous les utilisateurs

        require_once "../views/admin/Dashboard.php";
    }
}

