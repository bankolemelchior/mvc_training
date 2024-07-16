<?php

// echo "<pre>";

// var_dump($_SERVER["REQUEST_URI"]);

const routes = [
    '/' => 'homeController',
    'todo' => 'todoController',
    'register' => 'registerController',
    'login' => 'lognController',
];

if(isset($_SERVER["REQUEST_URI"])) {
    $route = $_SERVER["REQUEST_URI"];
    switch ($route) {
        case '/':
            require_once "../views2/HomeView.php";
            break;
        case '/todo-list':
            require_once "../views2/TodoView.php";
            break;
        case '/login':
            require_once "../views2/LoginView.php";
            break;
        case '/register':
            require_once "../views2/RegisterView.php";
            break;
        default:
            echo "La route demandée n'existe pas";
            break;
    }
}else {
    echo "hééééééloooooooééééééé";
}

?>