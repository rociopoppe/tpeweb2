{include file="header.tpl"}

<div class="container">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Agregar categoria</h1>
        </div>
    </div>

  <div class="container">
    <form  action="insertCat" method="POST">
      <div class="container">
          <div class="row justify-content-center align-items-center mt-3">
              <div class="col-7 ">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
              </div>
            </div>
          <div class="row justify-content-center align-items-center mt-3">
            <div class="col-3">
              <button type="submit" class="form-control btn  btn-info">Agregar</button>
            </div>
          </div>
      </div>  
        
    </form>

  </div>  

{include file="footer.tpl"}