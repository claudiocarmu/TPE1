<?php
/* Smarty version 3.1.39, created on 2021-10-06 03:46:43
  from '/opt/lampp/htdocs/TPE1/templates/modificarItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d0003598f30_09566170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ab196b243497261a9dc1a35ef34eaa538b354e' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/modificarItems.tpl',
      1 => 1633218687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615d0003598f30_09566170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>



<form name='formulario' action='modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
' method='GET' class='my-4'>
    <div class='row'>
        <div class='col-9'>
            <div class='form-group'>
                <label>SKU</label>
                <input name='sku' type='text' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>
>
            </div>
        </div>
        <div class='col-3'>
            <div class='form-group'>
                <label>Descripcion</label>
                <input name='descripcion' type='text' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
>
            </div>
        </div>
        <div class='col-9'>
            <div class='form-group'>
                <label>Precio</label>
                <input name='precio' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
>
            </div>
        </div>
        <div class='col-3'>
            <div class='form-group'>
                <label>Categoria</label>
                <input name='categoria' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['item']->value->categoria;?>
>
            </div>
        </div>
        <div class='col-9'>
            <div class='form-group'>
                <label>Stock</label>
                <input name='stock' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['item']->value->stock;?>
>
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
