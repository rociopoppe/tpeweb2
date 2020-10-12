{include file="header.tpl"}
 <div class="alert alert-danger" role="alert">
      {$mensaje}
  </div>
  
 <div class="container"> 
        <div class="row justify-content-center mt-5">
             <form action="verify" method="POST">
                <div class="form-group shadow-lg p-3 mb-5 bg-white rounded col-12">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp">
                  
              
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>

 
</div>

{include file="footer.tpl"}
