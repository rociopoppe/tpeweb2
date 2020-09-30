<form  action="productos/insert" method="POST">
  <div class="form-column align-items-center">
      <div class="col-auto">
        <label for="nombre">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
      </div>
      <div class="col-auto">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
      </div>
      <div class="col-auto">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
      </div>
      <div class="col-auto">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad"  name="cantidad" placeholder="Cantidad">
      </div>
      <div class="col-auto">
        <label for="categorias">Categoria</label>
          <select class="form-control" name="id_categoria">
            <option value="">Elegi...</option>
            <option  value="9">Helados</option>
            <option  value="2">Postres</option>
            <option value="3">Cafe</option>
          </select>
      </div>
  <div class="col-auto">
        <button type="submit" class="form-control btn btn-primary">Agregar nuevo producto!</button>
    </div>
    </div>  
    
</form>