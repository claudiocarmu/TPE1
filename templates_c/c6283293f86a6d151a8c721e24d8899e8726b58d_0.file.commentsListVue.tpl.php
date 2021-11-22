<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:41:11
  from 'C:\xampp\htdocs\TPE1\templates\vue\commentsListVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae727515218_04489621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6283293f86a6d151a8c721e24d8899e8726b58d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\vue\\commentsListVue.tpl',
      1 => 1637539524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ae727515218_04489621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app">
    <h2>{{ titulo }} </h2>

    <form id='formAddComment' @submit='addComment' method='POST' >
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
        <br>
        <input type="submit" class="btn btn-success btn-sm" value="Agregar comentario">
        <br>
        <br>
    </form>
    


    <form @submit='delComment' method='POST'>
   
        <ul id="comment-list" class="list-group">
            <h5>Comentario | Puntuacion</h5>     
            <li v-for="comentario in comments" class="list-group-item d-flex">
                {{comentario.comentario}} | {{comentario.puntuacion}}
                <div class="acciones ms-auto">
                    <button class="btn btn-sm btn-danger" v-on:click="delComment(comentario.id)">Borrar</button>
                </div>
            </li>             
        </ul>
    </form>

</div>
<?php }
}
