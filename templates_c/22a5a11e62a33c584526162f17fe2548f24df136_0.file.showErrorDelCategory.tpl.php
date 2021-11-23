<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:05:42
  from 'C:\xamp\htdocs\TPE1\templates\showErrorDelCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c3e66a92604_53812768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a5a11e62a33c584526162f17fe2548f24df136' => 
    array (
      0 => 'C:\\xamp\\htdocs\\TPE1\\templates\\showErrorDelCategory.tpl',
      1 => 1637627855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619c3e66a92604_53812768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto ">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
</div> 

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
