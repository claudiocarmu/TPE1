<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:45:27
  from '/opt/lampp/htdocs/TPE1/templates/form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e33e7034a14_89714007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7dffd3b1c2f7cc0cd5b781cf6f1c512e165cc8e' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/form_alta.tpl',
      1 => 1637757911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/ordenPuntaje.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619e33e7034a14_89714007 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Agrego un producto -->
<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

<form action="addProduct" method="POST" class="my-3">
    <div class="row">
    <div class='col-2'>
        <div class='form-group'>
            <label>SKU</label>
            <input name='sku' class='form-control'>
        </div>
    </div>
    <div class='col-5'>
        <div class='form-group'>
            <label>Descripcion</label>
            <input name='descripcion' class='form-control'>
        </div>
    </div>
    <div class='col-2'>
        <div class='form-group'>
            <label>Precio</label>
            <input name='precio' class='form-control'>
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
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>   
            </div>
    </div>
    <div class='col-1'>
        <div class='form-group'>
            <label>Stock</label>
            <input name='stock' class='form-control'>
        </div>
    </div>
</div>

<div>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/ordenPuntaje.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class='mt-2'>
    <button type="submit" class="btn btn-secondary btn-sm">Agregar</button>
</div> 
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
