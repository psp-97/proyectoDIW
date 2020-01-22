<?php
require "funciones/Conexion.php";
$conexion = new Conexion();
$resultado = "Inicial";

$usuario=$_GET['usuario'];
$resultado=mysqli_query($conexion,"select * from usuario where id=$usuario");
if (mysqli_num_rows($resultado)>0){
    $resultado = "si";
}else{
    $resultado = "no";
}

echo $resultado;
mysqli_close($conexion);
?>