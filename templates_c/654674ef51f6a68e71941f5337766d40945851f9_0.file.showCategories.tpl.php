<?php
/* Smarty version 3.1.39, created on 2021-11-22 04:02:25
  from 'C:\xampp\htdocs\TPE1\templates\showCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619b084172e5c9_80395227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654674ef51f6a68e71941f5337766d40945851f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showCategories.tpl',
      1 => 1637536841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619b084172e5c9_80395227 (Smarty_Internal_Template $_smarty_tpl) {
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
