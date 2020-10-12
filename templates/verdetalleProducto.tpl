 {include 'header.tpl'}
  <div class="container">
        <div class="row justify-content-center mt-4">
          <table class="table table-md table-hover table-light" >
            <thead>
              <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">PRECIO</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">CATEGORIA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{$producto->nombre}</td>
                <td>{$producto->descripcion}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->cantidad}</td>
                <td>{$categoria->descripcion}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row justify-content-center mt-4">
          <h2><a href="productos">Volver</a><h2>
        </div>
  </div>
       

{include file='footer.tpl'}
