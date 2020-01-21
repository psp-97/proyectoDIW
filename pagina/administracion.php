<?php
include "funciones/usuarios/funciones_usuario.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <a href="micuenta.php">Volver a Mi Cuenta</a>

    <h2>Listado de usuarios</h2>
    <?php
    $usuarios = getUsuarios();
    var_dump($usuarios);
    ?>

</div>
</body>
</html>