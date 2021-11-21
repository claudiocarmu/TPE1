
{include file = 'templates/header.tpl'}

{* Encabezado de la lista *}
<h1 class="title"> {$titulo} </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>ID</th> <th>SKU</th> <th>DESCRIPCION</th> <th>PRECIO</th> <th>STOCK</th> <th>CATEGORIA</th> <th>COMENTARIOS</th>
    </tr>

    <tr>
        <td>{$item->id}</td>
        <td>{$item->sku}</td> 
        <td>{$item->descripcion}</td> 
        <td>{$item->precio}</td> 
        <td>{$item->stock}</td> 
        <td>{$categoria->descripcion}</td>
        {* <td class='d-inline p-2'><a class='btn btn-primary btn-sm' href='verComentarios/{$item->id}'>Ver<a></td>
        <td class='d-inline p-2'><a class='btn btn-success btn-sm' href='agregarComentarios/{$item->id}'>Agregar<a></td> *}
    </tr>    

</table>

<div class="col-md-8" id="listCommentsVue" data-idProducto="{$item->id}">
        <!-- hueco para CSR -->
        {include file="vue/commentsListVue.tpl"}
</div>

<script src = "js/app.js"> </script>
{* Incluímos el footer *}
{include file = 'templates/footer.tpl'}