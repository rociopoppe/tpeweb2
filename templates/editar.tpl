<form  action="productos/editar" method="POST">
  <div class="form-column align-items-center">
      <div class="col-auto">
        <label for="nombre">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder={$producto->nombre}>
      </div>
      <div class="col-auto">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder={$producto->descripcion}>
      </div>
      <div class="col-auto">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" placeholder={$producto->precio}>
      </div>
      <div class="col-auto">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad"  name="cantidad" placeholder={$producto->cantidad}>
      </div>
      <div class="col-auto">
        <label for="categorias">Categoria</label>
          <select class="form-control" name="id_categoria">
            <option value="">{$producto->id_categoria}</option>
            <option  value="1">Helados</option>
            <option  value="2">Postres</option>
            <option value="3">Cafe</option>
          </select>
      </div>
  <div class="col-auto">
        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
    </div>
    </div>  