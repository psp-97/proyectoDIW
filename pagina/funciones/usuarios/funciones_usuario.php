<?php
require_once("funciones/Conexion.php");

function getUsuarios(){
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM usuario");
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $usuarios[] = $objeto;
    }
    return $usuarios;
}
