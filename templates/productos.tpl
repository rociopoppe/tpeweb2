{include file="header.tpl"}

<h1>{$titulo}</h1>
<div class="container">
    <ul class="list-group">

        {foreach from=$productos item=producto}
            <li class="list-group-item list-group-item-primary formprod">{$producto->nombre}</li>
            <div class="btnsXprod">
                <button type="button" class="btn btn-outline-info"><a href="productos/vermas/{$producto->nombre}">Ver descripción</a></button>
                <button type="button" class="btn btn-outline-dark"><a href="productos/editar/{$producto->id}">Editar</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="productos/borrar/{$producto->id}">Borrar</a></button> 
            </div>
        {/foreach}
</ul>

{include file="crearProducto.tpl"}


  
{include file="footer.tpl"} 