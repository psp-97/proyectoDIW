<?php
require_once("funciones/Conexion.php");

/**
 * Ordenado por el id que va a ser autoincrement
 */

function getContenidoLast()
{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido ORDER BY id desc LIMIT 10");
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
}

/**
 * orderby rand()
 */
function getContenidoAleatorio()
{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido ORDER BY RAND() LIMIT 10");
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
}

/**
 * @param $id del contenido
 */
function getContenidoId($id)
{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido where id=$id");
    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
       return $objeto;
    }else{
        return null;
    }
}

function getcontenidoSemana(){
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido where meme_semana='si'");
    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        return $objeto;
    }else{
        return null;
    }
}
//Prueba de conexion
/*
try{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM prueba");

    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)){
        var_dump($objeto);
    }
}catch (PDOException $e){
    echo $e;
}
*/
