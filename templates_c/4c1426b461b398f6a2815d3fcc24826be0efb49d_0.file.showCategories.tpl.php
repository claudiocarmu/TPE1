<?php
/* Smarty version 3.1.39, created on 2021-10-11 21:54:33
  from '/opt/lampp/htdocs/TPE1/templates/showCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61649679034469_11505285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1426b461b398f6a2815d3fcc24826be0efb49d' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showCategories.tpl',
      1 => 1633979443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61649679034469_11505285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>DESCRIPCION</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td>
            <td class='d-inline p-2'><a class='btn btn-danger btn-sm' href='delCategory/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Borrar<a></td>
            <td class='d-inline p-2'><a class='btn btn-success btn-sm' href='EditCategory/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Modificar<a></td>
            <td class='d-inline p-2'><a class='btn btn-primary btn-sm' href='VerDetalleCategoria/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Ver detalle<a></td>
            <td class='d-inline p-2'><a class='btn btn-secondary btn-sm' href='verProductosAsociados/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
'>Ver productos asociados<a></td>

        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
