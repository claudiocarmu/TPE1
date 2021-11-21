<?php
/* Smarty version 3.1.39, created on 2021-11-20 14:48:46
  from '/opt/lampp/htdocs/TPE1/templates/formAltaComentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6198fcbe708c02_84633580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924a4d8d9d9c9c54257946a787e43cb79ed07d0c' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/formAltaComentario.tpl',
      1 => 1637416122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6198fcbe708c02_84633580 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de comentario -->

<form action="insertar" method="POST" class="my-4" id="formAltaComentario">
    <div class="row">
        <div class="">
                    </div>
    
        <div class="col-9">
            <div class="form-group">
                <label>Comentario</label>
                <input name="comentario" type="text" class="form-control">
            </div>
        </div>

        
        <div class="col-3">
            <div class="form-group">
                <label>Puntuación</label>
                <select name="puntuacion" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

<?php }
}
