<?php
/* Smarty version 3.1.39, created on 2021-11-22 22:23:46
  from '/opt/lampp/htdocs/TPE1/templates/showUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c0a62bacd40_49373264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06b99ec6f33c358a0396d9f5a73508570982c373' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showUsers.tpl',
      1 => 1637615595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619c0a62bacd40_49373264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>ID</th> <th>EMAIL</th> <th>ROL (A=administrador - N=no administrador)</th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</td> 
            <td class='d-inline p-2'><a class='btn btn-danger btn-sm' href='delUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
'>Borrar<a></td>
            <td class='d-inline p-2'><a class='btn btn-success btn-sm' href='editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
'>Modificar rol<a></td>
        </tr>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
