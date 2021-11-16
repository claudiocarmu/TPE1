{include file = 'templates/header.tpl'}

{* Encabezado de la lista *}
<h1 class="title"> {$titulo} </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>ID_PRODUCTO</th> <th>ID_COMENTARIO</th> <th>COMENTARIO</th> <th>PUNTUACION</th>
    </tr>

    <tr>
        <td>{$item->id_producto}</td>
        <td>{$item->id}</td> 
        <td>{$item->comentario}</td> 
        <td>{$item->puntuacion}</td> 
       
        {* <td class='d-inline p-2'><a class='btn btn-primary btn-sm' href='verComentarios/{$item->id}'>Ver comentarios<a></td> *}
    </tr>    
</table>

<script src = "js/app.js"> </script>
{* Incluímos el footer *}
{include file = 'templates/footer.tpl'}