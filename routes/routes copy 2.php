<?php
require_once "../controllers/pageController.php";
require_once "../controllers/UserController.php";
require_once "../controllers/TaskController.php";
require_once "../controllers/LoginController.php";
require_once "../controllers/RegisterUserController.php";


// On definir l'url
$url = $_SERVER['REQUEST_URI'];
// Supprimez le premier slash s'il existe
if (strlen($url) > 1) {
    $url = substr($url, 1);
}
// Divisez la chaîne par le tiret "-"
$parts = explode('-', $url);
// var_dump ("part avant: $parts <br>");
// Déterminez le contrôleur et l'action
$controllerName = $parts[0] ?? '/';
$action = $parts[1] ?? 'index';
// $id = $_GET['id'] ?? null;

// var_dump ("part après: $parts <br>");
// var_dump ($controllerName) . "<br>";
// var_dump ($action);

if(isset($controllerName)) {
    switch ($controllerName) {
        case '/':
            $controllerInstance = new PageController();
            $controllerInstance->homePage();
            break;

        case 'user':
            $controllerInstance = new UserController();
            $controllerInstance->homePage();

            break;
        case 'task':
            $controllerInstance = new TaskController();
            $controllerInstance->homePage();

            break;
        case 'login':
            $controllerInstance = new LoginController();
            $controllerInstance->homePage();

            break;
        case 'Register':
            $controllerInstance = new RegisterUserController();
            $controllerInstance->homePage();

            break;
        default:
            echo "Controller non existant !";
            break;
    }
}


if(isset($action)) {
    switch ($action) {
        case 'index':
            $controllerInstance->index();
            break;
        case 'create':
            $controllerInstance->createUser();
            break;
        case 'update':
            $controllerInstance->create();
            break;
        case 'todo':
            $controllerInstance->create();
            break;
        default:
            echo "Action non existante !";
            break;
    }
}

?>