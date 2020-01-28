<?php
require_once("funciones/Conexion.php");

/**
 * @return array Con el contenido ordenado con el ultimo primero
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
 * @return array Con el contenido de manera aleatoria cada llamada
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
 * @return array Con el contenido de manera aleatoria cada llamada
 */
function getContenidoAleatorioCategorias($categoria)
{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido WHERE categoria=$categoria ORDER BY RAND() LIMIT 10");
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
}

/**
 * @param $id del contenido
 * @return mixed|null Objeto o nulo dependiendo si existe o no
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

/**
 * @return mixed|null Objeto o nulo dependiendo si existe o no
 */
function getcontenidoSemana(){
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM contenido, configuracion where configuracion.campo='meme_semana' and configuracion.valor=contenido.id");
    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        return $objeto;
    }else{
        return null;
    }
}

function addContenido($id_usuario, $descripcion, $imagen, $fuente, $categoria) {
    $c = new Conexion();
    $c->query("INSERT INTO contenido(id_usuario, descripcion, imagen, fuente, categoria) VALUES ($id_usuario, '$descripcion', '$imagen', '$fuente', $categoria)");
}




/**
 * @param $id del contenido
 * @return mixed|null Objeto o nulo dependiendo si existe o no
 */
function getValoracionId($id)
{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM valoracion where id_contenido=$id");
    /*
    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
        $contenido[] = $objeto;
    }
    return $contenido;
    */

    
    if ($objeto = $resultado->fetch(PDO::FETCH_OBJ)) {
       return $objeto;
    }else{
        return null;
    }
    
}

