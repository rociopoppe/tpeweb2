{include file="header.tpl"}

<div class="container">

    <div class="container">
        <div class="row justify-content-center mt-4">
            <h1>Agregar producto</h1>
        </div>
    </div>

    <div class="container">
      <form  action="insert" method="POST">
        <div class="form-column align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-7 ">
                      <label for="nombre">Nombre del producto</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
                    </div>
                    <div class="col-7">
                      <label for="descripcion">Descripción</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                    </div>
                    <div class="col-7">
                      <label for="precio">Precio</label>
                      <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
                    </div>
                    <div class="col-7">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad"  name="cantidad" placeholder="Cantidad">
                    </div>
                    <div class="col-7">
                        <label for="categorias">Categoria</label>
                        <select class="form-control" name="id_categoria">
                          <option>Elegi...</option>
                          {foreach from=$categorias item=categoria}
                            <option value="{$categoria->id_categoria}">{$categoria->descripcion}</option>
                          {/foreach}
                        </select>
                    </div>
                </div>
            </div>
                  <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-3">
                      <button type="submit" class="form-control btn  btn-info">Agregar nuevo producto!</button>
                    </div>
                  </div>
                  
            </div>  
        </div>
      </form>

</div>
{include file="footer.tpl"}