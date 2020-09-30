<?php

    require_once './Vista/ProductosVista.php';
    require_once './Modelo/ProductosModelo.php';
    
    class ProductosControlador{

        private $vista;
        private $modelo;
    
        function __construct(){
            $this->vista= new ProductosVista();
            $this->modelo = new ProductosModelo();
    
        }
    
        function Home(){
            $productos = $this->modelo->GetProductos();
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowHome($productos, $categorias);
        }
    
       /* 
       FALTA ESTA FUNCION PARA MOSTRAR LISTA DE PRODUCTOS FUERA DEL HOME
       function getTasks($params=null){
            if(empty($params)) {
                $productos = $this->modelo->getProductos();
                $this->vista->response($productos, 200);
            }
            else {
                $idTask = $params[':ID'];
                $task = $this->model->getTask($idTask);
                if ($task)
                    $this->view->response($task, 200);
                else
                    $this->view->response("no existe tarea con id {$idTask}", 404);
            }
        }
    
        }*/
        function InsertarProducto(){
            $id_categoria=$_POST["id_categoria"];
            if(isset($_POST["helados"])){
               $id_categoria=$_POST['helados'];
            }
            if(isset($_POST["postres"])){
               $id_categoria= $_POST['postres'];
            }
            if (isset($_POST["cafe"])){
                $id_categoria=$_POST['cafe'];

            }
            $this->modelo->InsertProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['cantidad'],$id_categoria);
            $this->vista->ShowHomeLocation();
        }
    
        function BorrarProducto($params = null){
            $id = $params[':ID'];
            $this->modelo->DeleteProductoDelModelo($id);
            $this->vista->ShowHomeLocation();
        }

        function EditarProducto($params = null){
            $id = $params[':ID'];
            $producto=$this->modelo->EditarProductoDelModelo($id);
            $this->vista->ShowEditTask($id);
 
            if ($producto) {
                $producto = $this->modelo->EditarProductoDelModelo($id);
                $this->view->response("Producto id=$id actualizada con éxito", 200);
            }
            else
                $this->view->response("Producto id=$id not found", 404);
        }
    
    


        //CATEGORIA
        function InsertarCategoria(){
            $this->modelo->InsertCategoria($_POST['descripcion']);
            $this->vista->ShowHomeLocation();  
        }
        
        function BorrarCategoria($params=null){
            $id= $params[':ID'];
            $this->modelo->DeleteCategoriaDelModelo($id);
            $this->vista->ShowHomeLocation();
        }
       
    
    }
    
    
    

