<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:45:27
  from '/opt/lampp/htdocs/TPE1/templates/ordenPuntaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e33e70394d5_64973627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bff398d6421358b758b244dfe63e340d4e3a51' => 
    array (
      0 => '/opt/lampp/htdocs/TPE1/templates/ordenPuntaje.tpl',
      1 => 1637757823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e33e70394d5_64973627 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-alta" method="POST"> 
    <label class="labelFiiltroPuntaje">Ordenar comentarios por puntaje:</label>
    <input name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 hidden/>
    <div class="contenedorFiltro">
                    <button type="button" class="fas fa-search btn-filtroP" name="filtrar" id="filtrarComentarios" ></button>
        <select name="orden" id="order" class="form-select form-select-lg mb-3 selectFiltroP" aria-label=".form-select-lg example">
                        <option value="ASC">menor a mayor </option>
                        <option value="DESC">mayor a menor</option>
        </select>
    </div>
</form>

<form class="form-alta" method="POST"> 
    <label class="labelFiiltroPuntaje">Ver comentarios con:</label>
    <input name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 hidden/>
    <div class="contenedorFiltro">
                    <button type="button" class="fas fa-search btn-filtroP" name="filtrar" id="comentariosPorEstrellas" ></button>
        <select name="puntaje" id="puntaje" class="form-select form-select-lg mb-3 selectFiltroP" aria-label=".form-select-lg example">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
        </select>
    </div>
</form>
      <?php }
}
