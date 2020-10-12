<?php

    require_once './Vista/CategoriasVista.php';
    require_once './Modelo/CategoriasModelo.php';
    require_once './Modelo/ProductosModelo.php';
    require_once './Vista/ProductosVista.php';
    require_once './Controlador/UserControlador.php';
    
    class CategoriasControlador{

        private $vista;
        private $modelo;
        private $ProductosModelo;
        private $ProductosVista;
        private $UserControlador;
    
        function __construct(){
            $this->vista= new CategoriasVista();
            $this->modelo = new CategoriasModelo();
            $this->ProductosVista= new ProductosVista();
            $this->ProductosModelo = new ProductosModelo();
            $this->UserControlador=new UserControlador();
    
        }
    
        function GetCategorias(){
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowCategorias($categorias);
        }
    
  
        function InsertarCategoria(){
            $this->UserControlador->checkLoggedIn();
            if(!empty($_POST['descripcion'])){
                $descripcion=$_POST['descripcion'];
                $this->modelo->InsertCategoria($descripcion);
                $categorias=$this->modelo->GetCategorias();
                $this->vista->ShowCategoriaUser($categorias);
            }else{
                $error="No estan completos todos los datos necesarios";
                $this->vista->ShowError($error);
            }
            
        }

        function BorrarCategoria($params=null){
            $this->UserControlador->checkLoggedIn();
            $id= $params[':ID'];
            $categoria=$this->ProductosModelo->GetProductosXCategoria($id);
            if(!empty($categoria)){
                $error="Esta categoria no puede borrarse. Hay productos asociados";
                $this->ProductosVista->ShowError($error);
            }
            else{
                $this->modelo->DeleteCategoriaDelModelo($id);
                $categorias=$this->modelo->GetCategorias();
                $this->vista->ShowCategoriaUser($categorias);
            }
           
        }


        function EditarCategoria($params=null){
            $this->UserControlador->checkLoggedIn();
            $id_categoria= $params[':ID'];
            $categoria=$this->modelo->GetCategoria($id_categoria);
            $this->vista->ShowEditCategoria($categoria);
        }
      
        function UpdateCategoria($params=null){
            $this->UserControlador->checkLoggedIn();
            $id_categoria = $params[':ID'];
            if(isset($_POST['descripcionedit'])){
                $descripcion=$_POST['descripcionedit'];
                $this->modelo->UpdateCategoria($id_categoria,$descripcion);
                  
            }
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowCategoriaUser($categorias);
    
        }
       
        function FiltrarXCategoria(){
            if (isset($_POST['categoria'])) {
                $id_categoria = $_POST['categoria'];
                $productosDeCat=$this->ProductosModelo->GetProductosXCategoria($id_categoria);
                if (!empty ($productosDeCat)){
                    $categorias=$this->modelo->GetCategorias();
                    for($iProducto = 0; $iProducto < count($productosDeCat); ++$iProducto) {
                        $id_categoria = $productosDeCat[$iProducto]->id_categoria;
                        for($iCategoria = 0; $iCategoria < count($categorias); ++$iCategoria) {
                              $categoria = $categorias[$iCategoria];
                              if($id_categoria == $categoria->id_categoria){
                                  $productosDeCat[$iProducto]->id_categoria= $categoria->descripcion;                     
                              }
                         }
                     }
                    $this->ProductosVista->ShowProductos($productosDeCat);
                }
                else{
                    $error="Esta categoria no tiene ningún producto";
                    $this->ProductosVista->ShowError($error);
                }
            }
        }

        function CrearCategoria(){
            $this->UserControlador->checkLoggedIn(); 
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowCrearCategoria($categorias);
        }

        function GetCategoriaUser(){
            $this->UserControlador->checkLoggedIn();
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowCategoriaUser($categorias);
        }

    
       
    
    }
    
    