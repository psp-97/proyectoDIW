<?php
//require_once("funciones/Conexion.php");

function getUsuarios(){
    $usuarios = [];
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM usuario where rol not like 'administrador'");
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $usuarios[] = $objeto;
    }
    return $usuarios;
}

function delUsuario($id){
    try{
        $c = new Conexion();
        $c->exec("DELETE FROM usuario WHERE id=$id");
        return true;
    }catch (PDOException $e){
        return false;
    }
}