<?php
/* Smarty version 3.1.39, created on 2021-11-22 04:02:18
  from 'C:\xampp\htdocs\TPE1\templates\form_alta_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619b083aad7848_86199804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c83176fb56180c943fdf25f55213f73050ce895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\form_alta_cat.tpl',
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
function content_619b083aad7848_86199804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

<form action="addCategory" method="POST" class="my-3">
    <div class="row">
        <div class='col-2'>
            <div class='form-group'>
                <label>Categría: </label>
                <input name='descripcion' class='form-control'>
            </div>
        </div>
    </div>
<div class='mt-2'>
    <button type="submit" class="btn btn-secondary btn-sm">Agregar</button>
</div> 
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
