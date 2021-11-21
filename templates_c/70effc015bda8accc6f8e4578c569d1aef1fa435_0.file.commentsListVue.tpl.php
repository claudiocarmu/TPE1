<?php
/* Smarty version 3.1.39, created on 2021-11-21 01:33:07
  from '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619993c371cc79_43543795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70effc015bda8accc6f8e4578c569d1aef1fa435' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl',
      1 => 1637454785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619993c371cc79_43543795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app">
    <h1>{{ titulo }} </h1>

    
    <ul id="comment-list" class="list-group">
        <li v-for="comentario in comments" class="list-group-item d-flex">
            {{comentario.comentario}} | {{comentario.puntuacion}}
            <div class="acciones ms-auto">
                <a class="btn btn-sm btn-danger" v-bind:comentario-id="comentario.id">Borrar</a>
            </div>
        </li> 

        
    </ul>
</div>
<?php }
}
