<?php
require_once "../controllers/pageController.php";
require_once "../controllers/UserController.php";
require_once "../controllers/TaskController.php";
require_once "../controllers/LoginController.php";
require_once "../controllers/RegisterUserController.php";
require_once "../controllers/DashboardController.php";


// On definir l'url
$route = $_SERVER['REQUEST_URI'];
$route = explode('?', $route)[0]; //Récupère uniquement ma route

// Supprimez le premier slash s'il existe
if (strlen($route) > 1) { //supprimer le slash uniqument si il n'est pas le seul élément du string $route
    $route = substr($route, 1);
}

// Divisez la chaîne par le tiret "-"
$parts = explode('-', $route);

// Déterminez le contrôleur et l'action
$controllerName = $parts[0] ?? '/';
$action = $parts[1] ?? 'home';
$id = $_GET['id'] ?? null;

// echo "<pre>";
// var_dump($route);
// echo $controllerName;


//Déterminer le contrôller à appéler
if(isset($controllerName)) {
    try {
        switch ($controllerName) {
            case '/':
                $controllerInstance = new PageController();
                $controllerInstance->homePage();
                break;
    
            case 'user':
                $controllerInstance = new UserController();
                // $controllerInstance->homePage();
    
                break;
            case 'task':
                $controllerInstance = new TaskController();
                // $controllerInstance->homePage();
    
                break;
            case 'login':
                $controllerInstance = new LoginController();
                // $controllerInstance->homePage();
    
                break;
            case 'register':
                $controllerInstance = new RegisterUserController();
                // $controllerInstance->homePage();
                break;
            case 'dashboard':
                $controllerInstance = new DashboardController();
                // $controllerInstance->homePage();
                break;
            default:
                echo "Controller non existant !";
                break;
        }
    } catch (Exception $e ) {
        echo "erreur... $e->getMessage()";
    }
}

echo ($controllerName) . "<br>";
echo ($id);
echo ($action) . "<br>";

//Déterminer l'action/la méthode du contrôller à appéler
if(isset($action)) {
    switch ($action) {
        case 'home':
            $controllerInstance->homePage();
            break;
        case 'create':
            $controllerInstance->create();
            break;
        case 'update':
            $controllerInstance->update();
            break;
        case 'delete':
            $controllerInstance->delete($id);
            break;
        default:
            echo "Action non existante !";
            break;
    }
}

?>