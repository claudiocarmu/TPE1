<?php
/* Smarty version 3.1.39, created on 2021-11-22 04:02:30
  from 'C:\xampp\htdocs\TPE1\templates\modificarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619b0846c385b8_11858576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23b710361c2d516570189a61e3ade59402ce2ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\modificarCategoria.tpl',
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
function content_619b0846c385b8_11858576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>



<form name='formulario' action='modificarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
' method='GET' class='my-4'>
    <div class='row'>
       
        <div class='col-9'>
            <div class='form-group'>
                <label>Categoria</label>
                <input name='descripcion' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
">
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
