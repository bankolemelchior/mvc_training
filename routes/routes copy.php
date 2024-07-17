<?php

var_dump($_GET);

$route = $_SERVER["REQUEST_URI"];

if(isset($route)) {
    switch ($route) {
        case '/':
            require_once "../views/Home.php";
            break;

        case '/todo-list':
            require_once "../views/Todoview.php";
            break;
        case '/login':
            require_once "../views/auth/Login.php";
            break;
        case '/register':
            require_once "../views/auth/Register.php";
            break;
        case '/adminboard':
            require_once "../views/admin/Dashboard.php";
            break;
        default:
            echo "Route invalide";
            break;
    }
}

?>