<!-- formulario de alta de comentario -->
<form action="insertar" method="POST" class="my-4">
    <div class="row">
        <div class="">
            Comentario de producto: {$producto}
        </div>

        <div class="col-9">
            <div class="form-group">
                <label>Comentario</label>
                <input name="comentario" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Prioridad</label>
                <select name="puntuacion" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    {* <div class="form-group">
        <label>Descripcion</label>
        <textarea name="descripcion" class="form-control" rows="3"></textarea>
    </div> *}

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>