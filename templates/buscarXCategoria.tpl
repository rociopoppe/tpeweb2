<div class="container">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Buscá por categoria</h1>
        </div>
    </div>
   
    <div class="container">
        <form  action="buscarXCategoria" method="POST">
            <div class="container">
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-7 ">
                        <select class="form-control" name="categoria">
                            <option value="">Elegir...</option>
                            {foreach from=$categorias item=categoria} 
                                <option value="{$categoria->id_categoria}">{$categoria->descripcion}</option>  
                            {/foreach}
                        </select> 
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-3">
                        <button type="submit" class="form-control btn  btn-info">Buscar</button>
                    </div>
                </div>
            </div>  
        </form>
    </div>

</div>
