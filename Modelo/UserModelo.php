<?php

class UserModelo{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
     
    function GetUsuario($user){
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
    
}

?>
