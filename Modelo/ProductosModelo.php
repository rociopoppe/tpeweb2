<?php

    class ProductosModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
        }


        function GetProductos(){
            $sentencia=$this->db->prepare("SELECT * FROM producto");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function GetProducto($id){
            $sentencia=$this->db->prepare("SELECT * FROM producto where id=?");
            $sentencia->execute([$id]);
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
     
        function InsertProducto($nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion,precio, cantidad, id_categoria) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria));
            return $this->db->lastInsertId();
        }
        

        function DeleteProductoDelModelo($id){
            $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
            $sentencia->execute(array($id));
        }
        
       
        function UpdateProducto($id,$nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("UPDATE producto set nombre=?, descripcion=?,precio=?, cantidad=?, id_categoria=? WHERE id=?");
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria,$id));
        }
       

        function GetProductosXCategoria($id_categoria){ 
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria=?");
            $sentencia->execute(array($id_categoria));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

    
    
    }
       
        
    