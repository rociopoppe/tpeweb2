<?php

require_once ('./libs/smarty/Smarty.class.php');


class ProductosVista{
   
    private $title;
 
    

    function __construct(){
        $this->title = "Lista de Productos";
    
    }

    function ShowHome($productos,$categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->display('templates/home.tpl'); 
    }

    function ShowProductos($productos){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/productos.tpl'); 
    } 

    function ShowEditarProducto($producto,$categorias){
        $smarty = new Smarty();
        $smarty->assign('producto', $producto); 
        $smarty->assign ('categorias',$categorias);
        $smarty->display('templates/editarProducto.tpl');
    }

    function ShowError($error) {
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/error.tpl');
    }

    function ShowDetalleProducto($producto,$categoria) {
        $smarty = new Smarty();
        $smarty->assign('producto', $producto);
        $smarty->assign ('categoria',$categoria);
        $smarty->display('templates/verdetalleProducto.tpl');
    }
    

    function ShowCrearProducto($productos,$categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Insertar producto");
        $smarty->assign ('productos', $productos);
        $smarty->assign ('categorias',$categorias);
        $smarty->display('templates/crearProducto.tpl');

    }
  
    function ShowProductoUser($productos){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/productosUser.tpl'); 
    }

   
}
