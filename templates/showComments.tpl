{include file = 'templates/header.tpl'}

{* Encabezado de la lista *}
<h1 class="title"> {$titulo} </h1>
<ul class="list-group list-unstyled mt-5">

<ul class="list-group list-unstyled mt-5">
<table class='table table-sm'>
    <tr>
        <th>{$producto}</th> <th>ID_COMENTARIO</th> <th>COMENTARIO</th> <th>PUNTUACION</th>
    </tr>

    <tr id="listaComentarios">
        {foreach from=$comentarios item=comentario}
            <tr>
                <td>{$comentario->id_producto}</td> 
                <td>{$comentario->id}</td> 
                <td>{$comentario->comentario}</td> 
                <td>{$comentario->puntuacion}</td> 
            
                {* <td class='d-inline p-2'><a class='btn btn-danger btn-sm' href='delProduct/{$item->id}'>Borrar<a></td> *}
                
            </tr>    
        {/foreach}

    </tr>    
    
</table>

<script src = "js/app.js"> </script>
{* Incluímos el footer *}
{include file = 'templates/footer.tpl'}