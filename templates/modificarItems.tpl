{* Incluímos el header *}
{include file = 'templates/header.tpl'}

{* Titulo modificación *}
<h1 class="title"> {$titulo} </h1>

{* Mostramos item a modificar *}


<form name='formulario' action='modificar/{$item->id}' method='GET' class='my-4'>
    <div class='row'>
        <div class='col-2'>
            <div class='form-group'>
                <label>SKU</label>
                <input name='sku' type='text' class='form-control' value={$item->sku}>
            </div>
        </div>
        <div class='col-5'>
            <div class='form-group'>
                <label>Descripcion</label>
                <input name='descripcion' type='text' class='form-control' value="{$item->descripcion}">
            </div>
        </div>
        <div class='col-2'>
            <div class='form-group'>
                <label>Precio</label>
                <input name='precio' class='form-control' value={$item->precio}>
            </div>
        </div>
        <div class='col-2'>
            <div class='form-group'>
                <label>Categoria</label>
                <input name='categoria' class='form-control' value={$item->categoria}>
            </div>
        </div>
        <div class='col-1'>
            <div class='form-group'>
                <label>Stock</label>
                <input name='stock' class='form-control' value={$item->stock}>
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary mt-2'>Guardar Modificación</button>
</form>

{* Incluímos el footer *}
{include file = 'templates/footer.tpl'}