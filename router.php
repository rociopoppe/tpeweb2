<?php
   
    require_once './Controlador/ProductosControlador.php';
    require_once './Controlador/CategoriasControlador.php';
    require_once './Controlador/UserControlador.php';
    require_once 'RouterClass.php';
    

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    
    $r = new Router();

    // rutas

    $r->addRoute("productos", "GET", "ProductosControlador", "GetProductos");

    $r->addRoute("insert", "POST", "ProductosControlador", "InsertarProducto");

    $r->addRoute("borrar/:ID", "GET", "ProductosControlador", "BorrarProducto");

    $r->addRoute("editar/:ID", "GET", "ProductosControlador", "EditarProducto");

    $r->addRoute("update/:ID", "POST", "ProductosControlador", "UpdateProducto");

    $r->addRoute("vermas/:ID", "GET", "ProductosControlador", "ShowDetail");

    $r->addRoute("crearProducto","GET","ProductosControlador","CrearProducto");

    $r->addRoute("listaproductos","GET","ProductosControlador","GetProductoUser");

    $r->addRoute("buscarXCategoria", "POST", "CategoriasControlador", "FiltrarXCategoria");

    $r->addRoute("categorias", "GET", "CategoriasControlador", "GetCategorias");

    $r->addRoute("crearCategoria","GET","CategoriasControlador","CrearCategoria");

    $r->addRoute("insertCat", "POST", "CategoriasControlador", "InsertarCategoria");

    $r->addRoute("borrarCat/:ID", "GET", "CategoriasControlador", "BorrarCategoria");

    $r->addRoute("editarCat/:ID", "GET", "CategoriasControlador", "EditarCategoria");

    $r->addRoute("updateCat/:ID", "POST", "CategoriasControlador", "UpdateCategoria");

    $r->addRoute("listacategorias","GET","CategoriasControlador","GetCategoriaUser");

    $r->addRoute("usuario", "GET", "ProductosControlador", "VerifiedUser");

    $r->addRoute("login", "GET", "UserControlador", "Login");

    $r->addRoute("verify", "POST", "UserControlador", "Verify");

    $r->addRoute("logout", "GET", "UserControlador", "Logout");

    

    //Ruta por defecto.
    $r->setDefaultRoute("ProductosControlador", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
