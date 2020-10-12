{include file="header.tpl"}

<div class="container">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Lista Categorias</h1>
        </div>
    </div>

    <ul class="container">

        {foreach from=$categorias item=categoria}
            <div class="container">
                <div class="row justify-content-center align-items-center mt-4">
                    <div class="col-7">
                        <li class="list-group-item list-group-item-primary">{$categoria->descripcion}</li>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-dark" id={$categoria->id_categoria}><a href="editarCat/{$categoria->id_categoria}">Editar</a></button>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-danger"><a href="borrarCat/{$categoria->id_categoria}">Borrar</a></button> 
                    </div>
                </div>
            </div>
      
        {/foreach}
    </ul>
</div>

{include file="footer.tpl"}