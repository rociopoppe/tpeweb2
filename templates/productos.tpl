{include file="header.tpl"}

 <div class="container">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Lista Productos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col -2">
                <ul>
                    {foreach from=$productos item=producto}
                        <div class="container">
                            <div class="row justify-content-center align-items-center mt-4 pl-5 pr-4">
                                <div class="col-8 ">
                                    <li class="list-group-item list-group-item-primary">{$producto->nombre} - 
                                    Categoria: {$producto->id_categoria} </li>
                                </div>
                                <div class="col -1">
                                    <button type="button" class="btn btn-outline-info"><a href="vermas/{$producto->id}">Detalle</a></button>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                
                </ul>
            </div>
        </div>
    </div>

</div>

{include file="footer.tpl"} 