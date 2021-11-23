<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:53:49
  from 'C:\xamp\htdocs\TPE1\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c49ad7b4b24_43921221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684c6ee859c60f929b158a9263933f0efa29a5b6' => 
    array (
      0 => 'C:\\xamp\\htdocs\\TPE1\\templates\\formRegister.tpl',
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
function content_619c49ad7b4b24_43921221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">

    <form method="POST" action="verifyRegister"> 
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" required class="form-control" id="password1" name="password1">
        </div>
        <div class="form-group">
            <label>Reingrese Password</label>
            <input type="password" required class="form-control" id="password2" name="password2">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>
        
        <button type="submit" class="btn btn-success mt-3">Registrarse</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
