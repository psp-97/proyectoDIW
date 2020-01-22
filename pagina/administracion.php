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
    <?php

    if (isset($_POST['borrarModal'])){
        echo $_POST['idModal'];
    }

    ?>
    <a href="micuenta.php">Volver a Mi Cuenta</a>
    <h2>Listado de usuarios</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $usuarios = getUsuarios();
        foreach ($usuarios as $u){
        ?>
        <tr>
            <th scope="row"><?php echo $u->id; ?></th>
            <td><?php echo $u->username; ?></td>
            <td><?php echo $u->correo; ?></td>
            <td><?php echo $u->rol; ?></td>
            <td><form action="" method="post">
                    <input type="text" name="id" value="<?php echo $u->id ?>" hidden>
                    <input class="btn btn-success" type="submit" name="editar" value="Editar">
                </form></td>
            <td><button type="button" class="btn btn-danger borrar" data-toggle="modal" data-target="#exampleModal" value="<?php echo $u->id; ?>">Borrar</button></td>
            <!--
            <td><form action="" method="post">
                    <input type="text" name="id" value="<?php echo $u->id ?>" hidden>
                    <input class="btn btn-danger" type="submit" name="borrar" value="Borrar">
                </form></td>
            -->

        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de que desea borrar este usuario?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="idModal" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="idModal" name="idModal" readonly>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="borrarModal" class="btn btn-danger">Borrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(".borrar").click(function ($e) {
            console.log($e.currentTarget.value);
            $("#idModal").val($e.currentTarget.value);
        });
    </script>

</div>
</body>
</html>