{include file="header.tpl"}
<div class="container">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <h1>Editar categoria</h1>
        </div>
    </div>

    <div class="container">
      <form  action="updateCat/{$categoria->id_categoria}" method="POST">
          <div class="form-column align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center mt-5">
                      <div class="col-7 ">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcionedit"  value="{$categoria->descripcion}">
                      </div>
         </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-3">
              <button type="submit" class="form-control btn  btn-info">Guardar cambios</button>
            </div>
        </div>  

      </form>

</div>

{include file="footer.tpl"}

