<?php

require_once "./libs/smarty/Smarty.class.php";

class UserVista{

    private $title;
    

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin($mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/formLogin.tpl');
    }

    
    function ShowVerify($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/usuarioLogin.tpl'); 
    }
 

}


?>
