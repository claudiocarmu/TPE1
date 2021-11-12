<?php
    require_once 'libs/Router.php';
    require_once 'api/api.controller.php';

    $router = new Router();

    // tabla de ruteo
    $router->addRoute('comentarios', 'POST', 'ApiController', 'addComment');
    $router->addRoute('comentarios', 'GET', 'ApiController', 'getAllComments');
    // $router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'getOne');
    // $router->addRoute('tareas/:ID', 'DELETE', 'ApiTaskController', 'remove');
    // $router->addRoute('tareas', "POST", 'ApiTaskController', 'addTask');
    // $router->addRoute('tareas/:ID', "PUT", 'ApiTaskController', 'updateTask');

    // rutea
    $resource = $_GET['resource'];
    $method = $_SERVER['REQUEST_METHOD'];
    $router->route($resource, $method);

?>