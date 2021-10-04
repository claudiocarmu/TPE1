<?php
    require_once './controllers/productos.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else {
        $action = 'home';
    }

    $params = explode('/', $action);

    $controller = new ProductoController();

    switch ($params[0]) {
        case 'home':
            $controller->showHome(); //muestra la pantalla principal Home
            break;
        case 'listProducts':
            $controller->showProducts(); //muestra el listado de productos con los botones
            break;
        case 'listCategories':
            $controller->showCategories(); //muestra el listado de categorías con los botones
            break;
        case 'addCategories':
            $controller->addCategories(); //muestra 
            break;
        case 'showProducts':
            $controller->showProducts();
            break;
        case 'addProduct':
            $controller->addProduct();
            break;
        case 'addCategory':
            $controller->addCategory();
            break;
        case 'borrar':
            $controller->delProducto($params[1]);
            break;
        case 'EditProduct':
            $controller->formEditProduct($params[1]);
            break;
        case 'modificar':
            $controller->modifyProducto($params[1]);
            break;
        default:
            echo '404 - Página no encontrada';
            break;
}