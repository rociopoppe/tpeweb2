<?php

    class ProductosModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
            $this->db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //PRODUCTOS

        function GetProductos(){
            $sentencia=$this->db->prepare("SELECT * FROM Producto");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
   
        function InsertProducto($nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("INSERT INTO Producto(nombre, descripcion,precio, cantidad, id_categoria) VALUES(?,?,?,?,?)");
            var_dump($id_categoria);
            
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria));
            return $this->db->lastInsertId();
        }
        
        function DeleteProductoDelModelo($id){
            $sentencia = $this->db->prepare("DELETE FROM Producto WHERE id=?");
            $sentencia->execute(array($id));
        }
        
        function EditarProductoDelModelo($id){
            $sql = "UPDATE Productos
                    SET nombre = ?, descripcion = ?, precio = ?, cantidad = ?, id_categoria = ?
                    WHERE id = ?";
            $sentencia = $this->db->prepare($sql);
            $result = $sentencia->execute([$id]); // ejecuta    
            return $result;        
        }
          
        // CATEGORIAS
        function GetCategorias(){
            $sentencia=$this->db->prepare("SELECT * FROM Categoria");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        
        function InsertCategoria($descripcion){
            $sentencia = $this->db->prepare("INSERT INTO Categoria(descripcion) VALUES(?)");
            var_dump($descripcion);
            $sentencia->execute(array($descripcion));
            return $this->db->lastInsertId();
        }

        function DeleteCategoriaDelModelo($id){
            //despues del where va el nombre del id que esta en la tabla
            $sentencia = $this->db->prepare("DELETE FROM Categoria WHERE id_categoria=?");
            $sentencia->execute(array($id));
        
        }
     
        
        


       
  
  
        
    }