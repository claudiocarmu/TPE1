<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductoView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function formAltaProducto($categorias) {
        $this->smarty->assign('titulo', 'Alta de producto');
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/form_alta.tpl');
    }

    function formAltaCategoria() {
        $this->smarty->assign('titulo', 'Alta de categoria');
        $this->smarty->display('templates/form_alta_cat.tpl');
    }

    function showProducts($productos) {         
        $this->smarty->assign('titulo', 'Listado de productos');
        $this->smarty->assign('items',$productos);
        $this->smarty->display('templates/showItems.tpl');
    }  

    function showCategories($categorias) {
        $this->smarty->assign('titulo', 'Listado de categorias');
        $this->smarty->assign('items',$categorias);
        $this->smarty->display('templates/showCategories.tpl');
    }    

    function showProduct($productos) {
        $this->smarty->assign('titulo', 'Listado de productos');
        $this->smarty->assign('items',$productos);
        $this->smarty->display('templates/showItems.tpl');
    }
    
    function showDetailProduct($productos, $categoria) {
        $this->smarty->assign('titulo', 'Detalle de producto');
        $this->smarty->assign('item',$productos);
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('templates/showDetailItems.tpl');
    }

    function getHome() {
        include 'templates/header.tpl';
        include 'templates/footer.tpl';
    }


    function showModifyProduct($producto, $categorias) {
        $this->smarty->assign('titulo', 'Modificación de productos');
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/modificarItems.tpl');
    }    

    function showModifyCategory($categoria) {
        $this->smarty->assign('titulo', 'Modificación de categorias');
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/modificarCategoria.tpl');
    }
}