<?php
/* Smarty version 3.1.39, created on 2021-10-11 04:14:11
  from '/opt/lampp/htdocs/TPE1/templates/showDetailCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61639df307d469_43638944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c38981f0a66a1ee75bc7aebf7e975aafd3e410' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showDetailCategory.tpl',
      1 => 1633918366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61639df307d469_43638944 (Smarty_Internal_Template $_smarty_tpl) {
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
