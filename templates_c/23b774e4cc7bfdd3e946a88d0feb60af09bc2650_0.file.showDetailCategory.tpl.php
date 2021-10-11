<?php
/* Smarty version 3.1.39, created on 2021-10-11 02:20:22
  from 'C:\xampp\htdocs\TPE1\templates\showDetailCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616383460b00a7_61390198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b774e4cc7bfdd3e946a88d0feb60af09bc2650' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showDetailCategory.tpl',
      1 => 1633911146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616383460b00a7_61390198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>ID</th> <th>DESCRIPCION</th> 
    </tr>

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td> 
    </tr>    
</table>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
