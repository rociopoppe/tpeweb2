<?php

require_once('./libs/smarty/Smarty.class.php');

class CategoriasVista{
   
    private $title;
    

    function __construct(){
        $this->title = "Lista de Categorias";
    }

    function ShowCategorias($categorias){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign ('categorias', $categorias);
        $smarty->display('templates/categorias.tpl');
    }


    function ShowEditCategoria($categoria){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('categoria', $categoria);  
        $smarty->display('templates/editarCategoria.tpl'); 
    }

    
    function ShowCrearCategoria($categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Insertar categoria");
        $smarty->assign ('categorias', $categorias);
        $smarty->display('templates/crearCategoria.tpl');

    }

    function ShowCategoriaUser($categorias){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign('categorias', $categorias); 
        $smarty->display('templates/categoriasUser.tpl'); 
    }
  
    function ShowError($error) {
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/error.tpl');
    }

}
