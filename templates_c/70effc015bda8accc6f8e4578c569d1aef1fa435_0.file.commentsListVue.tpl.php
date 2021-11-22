<?php
/* Smarty version 3.1.39, created on 2021-11-23 00:35:04
  from '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c2928810733_73088191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70effc015bda8accc6f8e4578c569d1aef1fa435' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/vue/commentsListVue.tpl',
      1 => 1637624102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c2928810733_73088191 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (($_smarty_tpl->tpl_vars['logged']->value == "A") || ($_smarty_tpl->tpl_vars['logged']->value == "N")) {?> 

    
    <div id="app">
    
        <form id='formAddComment' @submit='addComment' method='POST' >
            <h2>{{ titulo }} </h2>
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
    

<?php }?>

    

    
    <div id="app">
        <form @submit='delComment' method='POST'>
    
            <ul id="comment-list" class="list-group">
                <h5>Comentario | Puntuacion</h5>     
                <li v-for="comentario in comments" class="list-group-item d-flex">
                    {{comentario.comentario}} | {{comentario.puntuacion}}
    
    <?php if (($_smarty_tpl->tpl_vars['logged']->value == "A")) {?> 
        
     
                <div class="acciones ms-auto" >
                    <button class="btn btn-sm btn-danger" v-on:click="delComment(comentario.id)">Borrar</button>
                </div>
          
        
    <?php }?>

    
        <div id="app">

                    </li>             
                </ul>
            </form>
    
<?php }
}
