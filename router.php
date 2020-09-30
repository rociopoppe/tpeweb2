<?php
   
    require_once './Controlador/ProductosControlador.php';
    require_once 'RouterClass.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "ProductosControlador", "Home");
    
    $r->addRoute("productos/insert", "POST", "ProductosControlador", "InsertarProducto");

    $r->addRoute("productos/borrar/:ID", "GET", "ProductosControlador", "BorrarProducto");

    $r->addRoute("productos/editar/:ID", "POST", "ProductosControlador", "EditarProducto");

    $r->addRoute("categoria/insert", "POST", "ProductosControlador", "InsertarCategoria");

    $r->addRoute("categoria/borrar/:ID", "GET", "ProductosControlador", "BorrarCategoria");
    

    //Ruta por defecto.
    $r->setDefaultRoute("ProductosControlador", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
