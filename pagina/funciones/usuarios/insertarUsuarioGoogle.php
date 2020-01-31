<?php
include "../Conexion.php";
//ALTA DE UN ALUMNO

//recogemos los datos
$nombre= $_GET['nombre'];
$apellido1= $_GET['apellido1'];
$correo= $_GET['correo'];

//crear conexión a la Bd
$c = new Conexion();

// creamos inserción en la BD
$conexion->query("INSERT INTO usuario(nombre, apellido1, correo) values('$nombre','$apellido1','$correo')");

?>