<?php
    require_once 'controllers/productos.controller.php';
    require_once 'controllers/login.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else {
        $action = 'home';
    }

    $params = explode('/', $action);

    
    


    switch ($params[0]) {
        
        case 'home':
            $controller = new ProductoController();
            $controller->showHome(); //muestra la pantalla principal Home
            break;
        case 'listProducts':
            $controller = new ProductoController();
            $controller->showProducts(); //muestra el listado de productos con los botones
            break;
        case 'listCategories':
            $controller = new ProductoController();
            $controller->showCategories(); //muestra el listado de categorías con los botones
            break;
        case 'login':
            $authController = new AuthController();
            $authController->showLogin();
            break;
        case 'verify': 
            $authController = new AuthController();
            $authController->login();
            break;
        case 'logout': 
            $authController = new AuthController();
            $authController->logout();
            break;  
        case 'showProducts':
            $controller = new ProductoController();
            $controller->showProducts();
            break;
        case 'addProduct':
            $controller = new ProductoController();
            $controller->addProduct(); 
            break;
        case 'addCategory':
            $controller = new ProductoController();
            $controller->addCategory();
            break;
        case 'borrar':
            $controller = new ProductoController();
            $controller->delProducto($params[1]);
            break;
        case 'delCategory':
            $controller = new ProductoController();
            $controller->delCategoria($params[1]);
            break;
        case 'EditProduct':
            $controller = new ProductoController();
            $controller->formEditProduct($params[1]);
            break;
        case 'EditCategory':
            $controller = new ProductoController();
            $controller->formEditCategory($params[1]);
            break;
        case 'modificar':
            $controller = new ProductoController();
            $controller->modifyProducto($params[1]);
            break;
        case 'modificarCategoria':
            $controller = new ProductoController();
            $controller->modifyCategoria($params[1]);
            break;
        case 'VerDetalleProducto':
            $controller = new ProductoController();
            $controller->viewDetailProduct($params[1]);
            break;
        case 'VerDetalleCategoria':
                $controller = new ProductoController();
                $controller->viewDetailCategory($params[1]);
                break;    
        default:
            echo '404 - Página no encontrada';
            break;
}