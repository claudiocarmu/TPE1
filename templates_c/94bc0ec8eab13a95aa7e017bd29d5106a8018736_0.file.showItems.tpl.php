<?php
/* Smarty version 3.1.39, created on 2021-11-23 01:39:44
  from 'C:\xamp\htdocs\TPE1\templates\showItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c3850ae58b1_82792837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94bc0ec8eab13a95aa7e017bd29d5106a8018736' => 
    array (
      0 => 'C:\\xamp\\htdocs\\TPE1\\templates\\showItems.tpl',
      1 => 1637627855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619c3850ae58b1_82792837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>SKU</th> <th>DESCRIPCION</th> <th>PRECIO</th> <th>STOCK</th> <th>CATEGORIA</th>
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
            <td class='d-inline p-2'><a class='btn btn-danger btn-sm' href='delProduct/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Borrar<a></td>
            <td class='d-inline p-2'><a class='btn btn-success btn-sm' href='EditProduct/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Modificar<a></td>
            <td class='d-inline p-2'><a class='btn btn-primary btn-sm' href='VerDetalleProducto/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Ver detalle<a></td>
        </tr>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
