{literal}
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
        <input type="submit" value="Agregar comentario">
        <br>
        <br>
    </form>
    
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