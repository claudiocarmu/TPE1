<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductoView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    

    function showProducts($productos) {         
        $this->smarty->assign('titulo', 'Listado de productos');
        $this->smarty->assign('items',$productos);
        
        $this->smarty->display('templates/showItems.tpl');
    }  

    function showProduct($productos) {
        $this->smarty->assign('titulo', 'Listado de productos');
        $this->smarty->assign('items',$productos);
        
        $this->smarty->display('templates/showItems.tpl');
    }
    
    function getHome() {
        include 'templates/header.tpl';
        include 'templates/footer.tpl';
    }


    function showModifyProduct($producto) {
        $this->smarty->assign('titulo', 'Modificación de productos');
        $this->smarty->assign('item', $producto);
        
        $this->smarty->display('templates/modificarItems.tpl');
    }    
 
    function showCategories($categorias) {

        $this->smarty->assign('titulo', 'Listado de categorias');
        $this->smarty->assign('items',$categorias);
        
        $this->smarty->display('templates/showCategories.tpl');
        
        // include './templates/header.php';
        
        // echo '<ul class="list-group list-unstyled mt-5">';
        // echo "<table class='table table-sm'>";
        // echo '<tr>';
	    // echo '<th>DESCRIPCION</th>';
	    // echo '</tr>';
        // foreach($categorias as $categoria) {
        //     echo '<tr>';
	    //     echo "<td>$categoria->descripcion</td>";
        //     echo "<td class='d-inline p-2'><button class='btn btn-danger btn-sm'><a href='borrar/$categoria->id'>Borrar<a></button></td>";
        //     echo "<td class='d-inline p-2'><button class='btn btn-success btn-sm'><a href='modificar/$categoria->id'>Modificar<a></button></td>";  
        //     echo '</tr>';
        // }
        // echo "</table>";
        // include './templates/footer.php';
    }    

    function showModifyCategory($categoria) {

        $this->smarty->assign('titulo', 'Modificación de categorias');
        $this->smarty->assign('item', $categoria);
        
        $this->smarty->display('templates/modifyCategory.tpl');

        // include_once './templates/header.php';
        // echo "<form name='formulario' action='modificar/$categoria->id' method='GET' class='my-4'>
        //             <div class='row'>
                       
        //                 <div class='col-3'>
        //                     <div class='form-group'>
        //                         <label>Descripcion</label>
        //                         <input name='descripcion' type='text' class='form-control' value='$categoria->descripcion'>
        //                     </div>
        //                 </div>
                       
        //             </div>
        //             <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
        //       </form>";
        // include_once './templates/footer.php';
    }
}