<?php
/* Smarty version 3.1.39, created on 2021-11-24 00:59:02
  from '/opt/lampp/htdocs/TPE1/templates/modificarItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d80465850c7_18355468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ab196b243497261a9dc1a35ef34eaa538b354e' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/modificarItems.tpl',
      1 => 1637711925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619d80465850c7_18355468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>


<form name='formulario' action='modificar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
' method='GET' class='my-4'>
    <div class='row'>
        <div class='col-2'>
            <div class='form-group'>
                <label>SKU</label>
                <input name='sku' type='text' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->sku;?>
>
            </div>
        </div>
        <div class='col-5'>
            <div class='form-group'>
                <label>Descripcion</label>
                <input name='descripcion' type='text' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
">
            </div>
        </div>
        <div class='col-2'>
            <div class='form-group'>
                <label>Precio</label>
                <input name='precio' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
>
            </div>
        </div>
        <div class='col-2'>
            <div class='form-group'>
                <label>Categoria</label> 
                <select class='form-control' name='categoria'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>    
                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value->id == $_smarty_tpl->tpl_vars['producto']->value->categoria) {?>
                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>   
            </div>
        </div>
        <div class='col-1'>
            <div class='form-group'>
                <label>Stock</label>
                <input name='stock' class='form-control' value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
>
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
