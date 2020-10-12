<?php

require_once "./Vista/UserVista.php";
require_once "./Modelo/UserModelo.php";
require_once "./Modelo/ProductosModelo.php";
require_once "./Modelo/CategoriasModelo.php";

class UserControlador{

    private $vista;
    private $modelo;


    function __construct(){
        $this->vista = new UserVista();
        $this->modelo = new UserModelo();
        $this->ProductosModelo=new ProductosModelo();
        $this->CategoriasModelo=new CategoriasModelo();

    }

    function Login(){
        $this->vista->ShowLogin();

    }
  
  
    function checkLoggedIn(){
        session_start();
        
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ". LOGIN);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) { 
                header("Location: ". LOGOUT);
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }

    
    function Verify(){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        if(isset($user)){
            $userDB= $this->modelo->GetUsuario($user);
            if(isset($userDB) && $userDB){
                if (password_verify($pass, $userDB->password)){
                    session_start();
                    if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY']>10)){
                        header("Location: ".LOGOUT);
                    }
                    $_SESSION["EMAIL"] = $userDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();
        
                    $productos=$this->ProductosModelo->GetProductos();
                    $categorias=$this->CategoriasModelo->GetCategorias();
                    $this->vista->ShowVerify($productos, $categorias);
                }else{
                    $mensaje="Contraseña incorrecta";
                    $this->vista->ShowLogin($mensaje);
                }

            }else{
                $this->vista->ShowLogin("El usuario no existe");
            }
        }
    }

  
  


}

   
  


