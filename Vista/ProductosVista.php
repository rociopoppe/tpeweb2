<?php

require_once('./libs/smarty/Smarty.class.php');

class ProductosVista{
   
    private $title;
    

    function __construct(){
        $this->title = "Lista de Productos";
    }

    function showHome($productos, $categorias){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/productos.tpl'); 
        $smarty->assign ('categorias', $categorias);
        $smarty->display('templates/categorias.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function ShowEditTask($productos){
        $smarty = new Smarty();
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/productos.tpl'); 
    }

   
}
