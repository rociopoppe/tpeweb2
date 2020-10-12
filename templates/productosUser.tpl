{include file="header.tpl"}
<div class="container">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Lista Productos</h1>
        </div>
    </div>


    <ul class="container">
        {foreach from=$productos item=producto}
            <div class="container">
                <div class="row justify-content-center align-items-center mt-4">
                    <div class="col-7 ">
                        <li class="list-group-item list-group-item-primary">{$producto->nombre} - Categoria: {$producto->id_categoria}</li>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-info"><a href="vermas/{$producto->id}">Detalle</a></button>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-dark" id="{$producto->id}"><a href="editar/{$producto->id}">Editar</a></button> 
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-danger"><a href="borrar/{$producto->id}">Borrar</a></button> 
                    </div>
                </div>
            </div>
        {/foreach}
    </ul>
   
</div>
{include file="footer.tpl"}