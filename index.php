<?php 
session_start();
require_once "autoload.php";
require_once "config/config.php";
require_once "utils/utils.php";
require_once "config/conexion.php";
require_once "views/layout/header.php";
//require_once "controllers/ErrorController.php";


    if(isset($_GET['controller']) && isset($_GET['action'])) {
        $nombreController = $_GET['controller']."Controller";
        $action = $_GET['action'];
        if(class_exists($nombreController)){
            $controller = new $nombreController();
            if(method_exists($controller, $action)) {
                $controller->$action();
            }else{
                $nombreController = constant("controller_default");
                $action = constant("action_default");
                $controller = new $nombreController();
                $controller->$action();
            }
        }else{
            $nombreController = constant("controller_default");
            $action = constant("action_default");
            $controller = new $nombreController();
            $controller->$action();
        }
    }else{
        $nombreController = constant("controller_default");
        $action = constant("action_default");
        $controller = new $nombreController();
        $controller->$action();
    }
    
    require_once "views/layout/footer.php"
?>