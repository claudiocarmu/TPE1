<?php
/* Smarty version 3.1.39, created on 2021-11-24 00:51:18
  from '/opt/lampp/htdocs/TPE1/templates/showDetailItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d7e76cb1713_61194555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4c3ec3099d06bedafa8ad23eff92626c7234f2' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showDetailItems.tpl',
      1 => 1637711473,
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
function content_619d7e76cb1713_61194555 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->imagen))) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen;?>
">
        <?php }?>

    </tr>    

</table>

<div class="col-md-8" id="listCommentsVue" data-idProducto="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
        <!-- hueco para CSR -->

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['rol']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:vue/commentsListVue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logged'=>$_prefixVariable1), 0, false);
?>  
        </div>

<?php echo '<script'; ?>
 src = "js/app.js"> <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
