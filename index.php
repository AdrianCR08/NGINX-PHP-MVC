<?php
require_once 'core/Config.php';
require_once 'core/Controller.php';
require_once 'core/Views.php';
require_once 'core/Model.php';
require_once 'core/LoadModel.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : $default_controller;
$methodName = isset($_GET['action']) ? $_GET['action'] : 'index';

// Load the controller file
$controllerFile = 'controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $methodName)) {
            $controller->$methodName; // Directly call the method without using $params
        } else {
            echo "Método $methodName no encontrado en el controlador $controllerName<br>";
        }
    } else {
        echo "Clase $controllerName no encontrada<br>";
    }
} else {
    echo "Controlador $controllerName no encontrado<br>";
}
