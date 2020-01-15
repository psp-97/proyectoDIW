<?php

require_once ("../Conexion.php");

function getContenidoLast(){
    //Ordenado por el id que va a ser autoincrement

}

function getContenidoAleatorio(){
    //orderby rand()

}

//Prueba de conexion
try{
    $c = new Conexion();
    $resultado = $c->query("SELECT * FROM prueba");

    while ($objeto = $resultado->fetch(PDO::FETCH_OBJ)){
        var_dump($objeto);
    }
}catch (PDOException $e){
    echo $e;
}