<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:33:35
  from '/opt/lampp/htdocs/TPE1/templates/showItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ecbcf7ff209_79569728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99824fc5e14ddd2f04b834a2472e2f6462e71858' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showItems.tpl',
      1 => 1637796813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ecbcf7ff209_79569728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">
<div>
    <table class='table' >
        <tr>
            <th>SKU</th> <th>DESCRIPCION</th> <th>PRECIO</th> <th>STOCK</th> <th>CATEGORIA</th><th>IMAGEN</th>
        </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            
            <tr>  
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->stock;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->categoria;?>
</td>
                <td>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->imagen;
$_prefixVariable1 = ob_get_clean();
if ((isset($_prefixVariable1))) {?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->imagen;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 != null) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen;?>
" height="40" width="40">
                        <?php }?>
                    <?php }?>
                </td>
                <td class='d-inline p-1'><a class='btn btn-danger btn-sm' href='delProduct/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Borrar<a></td>
                <td class='d-inline p-1'><a class='btn btn-success btn-sm' href='EditProduct/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Modificar<a></td>
                <td class='d-inline p-1'><a class='btn btn-primary btn-sm' href='VerDetalleProducto/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Ver detalle<a></td>
            </tr>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
