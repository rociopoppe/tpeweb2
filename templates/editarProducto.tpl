{include file="header.tpl"}

<div class="container">

    <div class="container">
        <div class="row justify-content-center mt-4">
            <h1>Editar producto</h1>
        </div>
    </div>

    <div class="container">
        <form  action="update/{$producto->id}" method="POST">
          <div class="form-column align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center mt-5">
                      <div class="col-7 ">
                        <label for="nombre">Nombre del producto</label>             
                        <input type="text" class="form-control" id="nombre" name="nombreedit"  value="{$producto->nombre}">
                      </div>
                      <div class="col-7">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcionedit" value="{$producto->descripcion}">
                      </div>
                      <div class="col-7">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precioedit" value="{$producto->precio}">
                      </div>
                      <div class="col-7">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad"  name="cantidadedit" value="{$producto->cantidad}">
                      </div>
                      <div class="col-7">
                        <label for="categorias">Categoria</label>
                            <select class="form-control" name="id_categoriaedit">
                              {foreach from=$categorias item=categoria}
                                  {if $categoria->id_categoria== $producto->id_categoria}
                                    <option value="{$categoria->id_categoria}" selected>{$categoria->descripcion}</option>
                                  {else}
                                  <option value="{$categoria->id_categoria}">{$categoria->descripcion}</option>
                              {/if}
                              {/foreach}
                          </select>   
                      </div>
                  </div>
                  <div class="row justify-content-center align-items-center mt-5">
                      <div class="col-3">
                          <button type="submit" class="form-control btn  btn-info">Guardar cambios</button>
                      </div>
                  </div>
              </div>  
            </div>
          </form>

  {include file="footer.tpl"} 