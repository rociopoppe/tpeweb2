<?php

    require_once './Vista/ProductosVista.php';
    require_once './Modelo/ProductosModelo.php';
    require_once './Modelo/CategoriasModelo.php';
    require_once './Vista/UserVista.php';
    require_once './Controlador/UserControlador.php';
    
    class ProductosControlador{
    
        private $vista;
        private $modelo;
        private $CategoriasModelo;
        private $UserVista;
        private $UserControlador;
    
        function __construct(){
            $this->vista= new ProductosVista(); 
            $this->modelo = new ProductosModelo();
            $this->CategoriasModelo=new CategoriasModelo();
            $this->UserVista=new UserVista();
            $this->UserControlador=new UserControlador();
    
        }

        function Home(){
            $productos=$this->modelo->GetProductos();
            $categorias=$this->CategoriasModelo->GetCategorias();
            $this->vista->ShowHome($productos, $categorias);
        }


        function ShowHomeLocation($action){
            header("Location: ".BASE_URL.$action);
        }

        
      
        function GetProductos(){
            $productos = $this->modelo->GetProductos();
            $categorias = $this->CategoriasModelo->GetCategorias();
            for($iProducto = 0; $iProducto < count($productos); ++$iProducto) {
               $id_categoria = $productos[$iProducto]->id_categoria;
               for($iCategoria = 0; $iCategoria < count($categorias); ++$iCategoria) {
                     $categoria = $categorias[$iCategoria];
                     if($id_categoria == $categoria->id_categoria){
                         $productos[$iProducto]->id_categoria= $categoria->descripcion;                     
                     }
                }
            }
            $this->vista->ShowProductos($productos);
        }
      
        function InsertarProducto(){  
            $this->UserControlador->checkLoggedIn();   
            if(isset ($_POST['nombre']) &&
                ($_POST['descripcion'])&&
                ($_POST['precio'])&&
                ($_POST['cantidad'])&&
                ($_POST['id_categoria'])){  
                    $nombre=$_POST["nombre"];
                    $descripcion=$_POST['descripcion'];
                    $precio=$_POST['precio'];
                    $cantidad=$_POST['cantidad'];
                    $id_categoria=$_POST['id_categoria'];        
                    $this->modelo->InsertProducto($nombre,$descripcion,$precio,$cantidad,$id_categoria);
                    $productos=$this->modelo->GetProductos();
                    $this->vista->ShowProductoUser($productos);
            }else{
                $error="No estan completos todos los datos necesarios";
                $this->vista->ShowError($error);
            }
  
            
        }
        
        function BorrarProducto($params = null){
            $this->UserControlador->checkLoggedIn();  
            $id = $params[':ID'];
            $this->modelo->DeleteProductoDelModelo($id);
            $productos=$this->modelo->GetProductos();
            $this->vista->ShowProductoUser($productos);
        }


   
        function EditarProducto($params = null){
            $this->UserControlador->checkLoggedIn();  
            $id = $params[':ID'];
            $producto=$this->modelo->GetProducto($id);
            $categorias=$this->CategoriasModelo->GetCategorias();
            $this->vista->ShowEditarProducto($producto, $categorias);

        }
 
        function UpdateProducto($params=null){
            $this->UserControlador->checkLoggedIn(); 
            $id = $params[':ID'];
            if(isset($_POST['nombreedit'])&&
                ($_POST['descripcionedit'])&&
                ($_POST['precioedit'])&&
                ($_POST['cantidadedit'])&&
                ($_POST['id_categoriaedit'])){
                    $id= $params[':ID'];
                    $nombre=$_POST["nombreedit"];
                    $descripcion=$_POST['descripcionedit'];
                    $precio=$_POST['precioedit'];
                    $cantidad=$_POST['cantidadedit'];
                    $id_categoria=$_POST['id_categoriaedit'];
                    $this->modelo->UpdateProducto($id,$nombre,$descripcion,$precio,$cantidad,$id_categoria);
                  
            }
            $this->GetProductoUser();    
        }

        function ShowDetail($params=null) {
            $id= $params[':ID'];
            $producto=$this->modelo->GetProducto($id);
            $id_categoria=$producto->id_categoria;
            $categoria=$this->CategoriasModelo->GetCategoria($id_categoria);
            $this->vista->ShowDetalleProducto($producto,$categoria);
                        
        }

        function CrearProducto(){
            $this->UserControlador->checkLoggedIn(); 
            $productos=$this->modelo->GetProductos();
            $categorias=$this->CategoriasModelo->GetCategorias();
            $this->vista->ShowCrearProducto($productos,$categorias);
        }

        function GetProductoUser(){
            $productos = $this->modelo->GetProductos();
            $categorias = $this->CategoriasModelo->GetCategorias(); 
            for($iProducto = 0; $iProducto < count($productos); ++$iProducto) {
               $id_categoria = $productos[$iProducto]->id_categoria;
               for($iCategoria = 0; $iCategoria < count($categorias); ++$iCategoria) {
                     $categoria = $categorias[$iCategoria];
                     if($id_categoria == $categoria->id_categoria){
                         $productos[$iProducto]->id_categoria= $categoria->descripcion;
                        
                     }
                }
            }
            $this->vista->ShowProductoUser($productos);
        }

        function VerifiedUser(){
            $this->UserControlador->checkLoggedIn(); 
            $productos=$this->modelo->GetProductos();
            $categorias=$this->CategoriasModelo->GetCategorias();
            $this->UserVista->ShowVerify($productos, $categorias);
        }     
    

        
       

        

     

   


    

    
     
    
    
    }
    
    
    

