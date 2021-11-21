<?php
/* Smarty version 3.1.39, created on 2021-11-18 23:44:48
  from '/opt/lampp/htdocs/TPE1/templates/showComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6196d7602f0080_77393051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f71b50fa88ae554878c552a81bea1fb0cdf50f' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showComments.tpl',
      1 => 1637275486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6196d7602f0080_77393051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<h3> <?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
 </h3>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">

<table class='table table-sm' id="listaComentarios">

     </table>

<?php echo '<script'; ?>
 src = "js/app.js"> <?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
