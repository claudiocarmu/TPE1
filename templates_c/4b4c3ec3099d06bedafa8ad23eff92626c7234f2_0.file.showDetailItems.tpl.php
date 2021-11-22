<?php
/* Smarty version 3.1.39, created on 2021-11-23 00:37:35
  from '/opt/lampp/htdocs/TPE1/templates/showDetailItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c29bff0b3d2_16561741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4c3ec3099d06bedafa8ad23eff92626c7234f2' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showDetailItems.tpl',
      1 => 1637624251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:vue/commentsListVue.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619c29bff0b3d2_16561741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>ID</th> <th>SKU</th> <th>DESCRIPCION</th> <th>PRECIO</th> <th>STOCK</th> <th>CATEGORIA</th>
    </tr>

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->stock;?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>

    </tr>    

</table>

<div class="col-md-8" id="listCommentsVue" data-idProducto="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
        <!-- hueco para CSR -->

                <?php $_smarty_tpl->_subTemplateRender("file:vue/commentsListVue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logged'=>'A'), 0, false);
?>  
        </div>

<?php echo '<script'; ?>
 src = "js/app.js"> <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
