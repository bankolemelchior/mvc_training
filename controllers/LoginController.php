<?php
class LoginController 
{
    //constructeur ?!
    public function homePage() {
        require_once "../views/auth/Login.php";
    }
    public function show() {
        echo "show";
    }
    public function loginUser() {

    }
    public function logoutUser() {
        echo "logoutUser";
    }
}

