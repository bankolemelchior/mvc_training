<?php
require_once "../models/UserModel.php";

class DashboardController
{
    //constructeur ?!

    private $user;

    function __construct() {
        $this->user = new UserModel();
    }

    public function homePage() {
        require_once "../views/admin/Dashboard.php";
    }
    public function index() {
        return $this->user->getAllUsers();
     
    }
    public function create() {
        echo "createUser";
    }
    public function delete($id) {
        $this->user->deleteUser($id);
        // echo "delete from dash, voici l'id: $id";
        $this->homePage();
    }
    public function loginPage() {

    }
}

