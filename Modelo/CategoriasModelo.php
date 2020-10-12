<?php

    class CategoriasModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
        }

        function GetCategorias(){
            $sentencia=$this->db->prepare("SELECT * FROM categoria");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        
        function GetCategoria($id_categoria){
            $sentencia=$this->db->prepare("SELECT * FROM categoria WHERE id_categoria=?");
            $sentencia->execute(array($id_categoria));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }

        function InsertCategoria($descripcion){
            $sentencia = $this->db->prepare("INSERT INTO categoria(descripcion) VALUES(?)");
            $sentencia->execute(array($descripcion));
            return $this->db->lastInsertId();
        }

        function DeleteCategoriaDelModelo($id){
            $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
            $sentencia->execute(array($id));
        
        }
     

        function UpdateCategoria($id_categoria,$descripcion){
            $sentencia = $this->db->prepare("UPDATE categoria SET descripcion= ? WHERE id_categoria=?");
            $sentencia->execute(array($descripcion,$id_categoria));
        }

        

       
      

    
        
  
        
        
 
  
  
    }   
    