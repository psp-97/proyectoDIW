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
    $resultado = $c->query("SELECT val.id, val.comentario, val.megusta, usu.username FROM valoracion val, usuario usu where val.id_usuario=usu.id && val.id_contenido=$id");


    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
       return $objeto;
    }
    else{
        return null;
    }
    

    /*
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
    */


}

function addValoracion($id_usuario, $id_contenido, $comentario) {
    $c = new Conexion();
    $c->query("INSERT INTO valoracion(id_usuario, id_contenido, megusta, comentario) VALUES ($id_usuario, '$id_contenido', '1', '$comentario')");
}





function delValoracion($id_comentario){
    try {
        $c = new Conexion();
        $c->exec("DELETE FROM valoracion WHERE id=$id_comentario");
        return true;
    }
    catch (PDOException $e) {
        return false;
    }
}
