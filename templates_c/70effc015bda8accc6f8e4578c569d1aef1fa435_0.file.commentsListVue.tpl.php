<?php
/* Smarty version 3.1.39, created on 2021-11-21 23:16:41
  from '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ac549db9001_06624450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70effc015bda8accc6f8e4578c569d1aef1fa435' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl',
      1 => 1637532985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ac549db9001_06624450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app">
    <h1>{{ titulo }} </h1>

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
            <li v-for="comentario in comments" class="list-group-item d-flex">
                {{comentario.comentario}} | {{comentario.puntuacion}} | {{comentario.id}}
                <div class="acciones ms-auto">
                    <button class="btn btn-sm btn-danger" v-on:click="delComment(comentario.id)">Borrar</button>
                </div>
            </li>             
        </ul>
    </form>

</div>
<?php }
}
