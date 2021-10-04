<?php

include_once('models/producto.model.php');
include_once('views/producto.view.php');

class ProductoController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
    }
    
    function showHome() {
        $this->view->getHome();
    }
   
    public function showProduct() {
        $productos = $this->model->obtenerProductos();
        $this->view->showProduct($productos);
    }

    public function showCategories() {
        $categorias = $this->model->obtenerProductos();
        $this->view->showCategories($categorias);
    }

    function showProducts() {
        $productos = $this->model->obtenerProductos();
        $this->view->showProducts($productos);
    }

    function addCategories() {
        include './templates/header.php';
        include './templates/form_alta_cat.php';
        include './templates/footer.php';
    }

    function addProduct() {
        $sku = $_REQUEST['sku'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];
        $categoria = $_REQUEST['categoria'];
        $stock = $_REQUEST['stock'];
        $this->model->agregarProducto($sku, $descripcion, $precio, $categoria, $stock);
        header("Location: " . BASE_URL); 
    }

    function addCategory() {
        $descripcion = $_REQUEST['descripcion'];
        $this->model->agregarCategoria($descripcion);
        header("Location: " . BASE_URL); 
    }

    function delProducto($id) {
        $this->model->borrarProducto($id);
        header("Location: " . BASE_URL. "showProducts");
    }

    function formEditProduct($id) {
        $producto = $this->model->obtenerProducto($id);
        $this->view->showModifyProduct($producto);
    }

    function modifyProducto($id){
        echo('<pre>');
        var_dump($id);
        echo('</pre>');
        if ((isset($_GET['sku']) || !empty($_GET['sku'])) && 
           (isset($_GET['descripcion']) || !empty($_GET['descripcion'])) &&
           (isset($_GET['precio']) || !empty($_GET['precio'])) &&
           (isset($_GET['categoria']) || !empty($_GET['categoria'])) &&
           (isset($_GET['stock']) || !empty($_GET['stock']))) {
            $newSku = $_GET['sku'];
            $newDescripcion = $_GET['descripcion'];
            $newPrecio = $_GET['precio'];
            $newCategoria = $_GET['categoria'];
            $newStock = $_GET['stock'];
            $this->model->modificarProducto($id, $newSku, $newDescripcion, $newPrecio, $newCategoria, $newStock);
            header("Location: " . BASE_URL. "showProducts"); 
        }
    }

}