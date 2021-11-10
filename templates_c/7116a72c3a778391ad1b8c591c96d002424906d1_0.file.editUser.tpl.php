<?php
/* Smarty version 3.1.39, created on 2021-11-10 02:39:39
  from '/opt/lampp/htdocs/TPE1/templates/editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618b22db388462_02626797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7116a72c3a778391ad1b8c591c96d002424906d1' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/editUser.tpl',
      1 => 1636508372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618b22db388462_02626797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>


<form name='formulario' action='modificarUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
' method='GET' class='my-4'>
    <div class='row'>
       
        <div class='col-9'>
            <div class='form-group'>
                <label>Email</label>
                <p><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>
                <label>Rol (A/N)</label>
                <input type="text" required class="form-control" id="rol" name="rol" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
>
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
