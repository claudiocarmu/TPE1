<?php
/* Smarty version 3.1.39, created on 2021-10-06 15:14:59
  from '/opt/lampp/htdocs/TPE1/templates/form_alta_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615da15397ce11_92287658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a64929a6361f402697e03947d6905d6c5d978c95' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/form_alta_cat.tpl',
      1 => 1633526049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615da15397ce11_92287658 (Smarty_Internal_Template $_smarty_tpl) {
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
