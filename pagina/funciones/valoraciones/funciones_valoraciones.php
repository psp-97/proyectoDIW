<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/01/20
 * Time: 14:44
 */


 /**
 * @param $id del contenido
 * @return mixed|null Objeto o nulo dependiendo si existe o no
 */
function getValoracionId($id) {
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM valoracion val, usuario usu where val.id_usuario=usu.id && val.id_contenido=$id");
    /*
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
    */

    
    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
       return $objeto;
    }
    else{
        return null;
    }
}