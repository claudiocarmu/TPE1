{literal}
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
{/literal}