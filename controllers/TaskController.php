<?php
class TaskController 
{
    //constructeur ?!
    public function homePage() {
        require_once "../views/Todoview.php";
    }
    public function homePrincipal() {
        require_once "../views/Home.php";
    }
    public function index() {
        echo "index";
    }
    public function create() {
        echo "createUser";
    }
    public function delete() {

    }
    public function update() {

    }
}

