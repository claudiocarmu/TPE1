<?php
/* Smarty version 3.1.39, created on 2021-11-18 00:50:31
  from '/opt/lampp/htdocs/TPE1/templates/showComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619595474273d1_80161225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f71b50fa88ae554878c552a81bea1fb0cdf50f' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/showComments.tpl',
      1 => 1637192705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619595474273d1_80161225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="title"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</th> <th>ID_COMENTARIO</th> <th>COMENTARIO</th> <th>PUNTUACION</th>
    </tr>

    <tr id="listaComentarios">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->id_producto;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->id;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value->puntuacion;?>
</td> 
            
                                
            </tr>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tr>    
    
</table>

<?php echo '<script'; ?>
 src = "js/app.js"> <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
