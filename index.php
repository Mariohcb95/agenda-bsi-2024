<?php 

include_once 'includes/header.php';

function loadController($controllerName){
    $file = '/'.__DIR__.'/app/controller/'.$controllerName.'php';

    if (file_exists($file)){
        include_once $file;
    } else {
        echo 'Arquivo do controlador não encontrado';
        exit;
    }

}

$route = $_GET['route'] ?? 'index';

$controllerName = ucfirst($route) . 'Controller';

loadController($controllerName);

if (class_exists($controllerName)) {
    
    //Instância o controlador
    $controller = new $controllerName();

    $params = array_merge($_POST, $_GET);

    //Lida com a requisição
    $controller->handleRequest($action, $params);
} else {

}


include_once 'includes/footer.php';


?>