{literal}
<div id="app">
    <h1>{{ titulo }} </h1>
    <p>{{ subtitulo }}</p>
    
    <ul id="comment-list" class="list-group">
        <li v-for="comentario in comentarios" class="list-group-item d-flex">
            {{comentario.descripcion}} | {{comentario.puntuacion}}
            <div class="acciones ms-auto">
                <a class="btn btn-sm btn-danger" v-bind:comentario-id="comentario.id">Borrar</a>
                {* <a v-if="task.finalizada == 0" class="btn btn-sm btn-success" v-bind:data-id="task.id">Done</a> *}
            </div>
        </li> 

        
    </ul>
</div>
{/literal}