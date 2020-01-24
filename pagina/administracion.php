<?php
include "funciones/Conexion.php";
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
    if (isset($_POST['editarModal'])) {
        if (updateUsuario(array("id" => $_POST['idModal'],
            "username" => $_POST['usernameModal'],
            "password" => $_POST['passwordModal'],
            "nombre" => $_POST['nombreModal'],
            "apellido1" => $_POST['apellido1Modal'],
            "apellido2" => $_POST['apellido2Modal'],
            "correo" => $_POST['correoModal'],
            "fecha" => $_POST['fechaModal'],
            "pais" => $_POST['paisModal'],
            "cp" => $_POST['cpModal'],
            "telefono" => $_POST['telefonoModal'],
            "rol" => $_POST['rolModal']))){
            echo "<div class='alert alert-success'>Usuario editado con éxito</div>";
        }else{
            echo "<div class='alert alert-danger'>Error al editar el usuario</div>";
        }
    }
    if (isset($_POST['borrarModal'])) {
        if (delUsuario($_POST['idModal'])) {
            echo "<div class='alert alert-success'>Usuario borrado con éxito</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al borrar el usuario</div>";
        }
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
        if (empty($usuarios)) {
            echo "<div class='alert alert-danger'>No hay usuarios registrados en el sistema</div>";
        } else {
            foreach ($usuarios as $u) {
                ?>
                <tr>
                    <th scope="row"><?php echo $u->id; ?></th>
                    <td><?php echo $u->username; ?></td>
                    <td><?php echo $u->correo; ?></td>
                    <td><?php echo $u->rol; ?></td>
                    <td>
                        <button type="button" class="btn btn-success editar" data-toggle="modal"
                                data-target="#editarModal" value="<?php echo $u->id; ?>">Editar
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger borrar" data-toggle="modal"
                                data-target="#borrarModal" value="<?php echo $u->id; ?>">Borrar
                        </button>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>

    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Edite los campos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="idModalEditar" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="idModalEditar" name="idModal" readonly>
                            <label for="usernameModalEditar" class="col-form-label">Username:</label>
                            <input type="text" class="form-control" id="usernameModalEditar" name="usernameModal">
                            <label for="passwordModalEditar" class="col-form-label">Password:</label>
                            <input type="text" class="form-control" id="passwordModalEditar" name="passwordModal">
                            <label for="nombreModalEditar" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreModalEditar" name="nombreModal">
                            <label for="apellido1ModalEditar" class="col-form-label">Apellido 1:</label>
                            <input type="text" class="form-control" id="apellido1ModalEditar" name="apellido1Modal">
                            <label for="apellido2ModalEditar" class="col-form-label">Apellido 2:</label>
                            <input type="text" class="form-control" id="apellido2ModalEditar" name="apellido2Modal">
                            <label for="correoModalEditar" class="col-form-label">Correo electrónico:</label>
                            <input type="text" class="form-control" id="correoModalEditar" name="correoModal">
                            <label for="fechaModalEditar" class="col-form-label">Fecha de nacimiento:</label>
                            <input type="text" class="form-control" id="fechaModalEditar" name="fechaModal">
                            <label for="paisModalEditar" class="col-form-label">Pais:</label>
                            <input type="text" class="form-control" id="paisModalEditar" name="paisModal">
                            <label for="cpModalEditar" class="col-form-label">Código postal:</label>
                            <input type="number" class="form-control" id="cpModalEditar" name="cpModal">
                            <label for="telefonoModalEditar" class="col-form-label">Telefono:</label>
                            <input type="number" class="form-control" id="telefonoModalEditar" name="telefonoModal">
                            <label for="rolModalEditar" class="col-form-label">Rol:</label>
                            <input type="text" class="form-control" id="rolModalEditar" name="rolModal">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="editarModal" class="btn btn-success">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">¿Está seguro de que desea borrar este usuario?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            Todos las valoraciones de este usuario seran borradas y los contenidos pasarám
                            a pertenecer al administrador del sitio.
                        </div>
                        <div class="form-group">
                            <label for="idModal" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="idModalBorrar" name="idModal" readonly>
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
        $(".editar").click(function ($e) {
            $("#idModalEditar").val($e.currentTarget.value);

            $e.preventDefault();
            var datousuario = new Object();
            //datousuario.usuario = $("#usuario").val();
            datousuario.usuario = $e.currentTarget.value;
            dato_str_usuario = JSON.stringify(datousuario);
            console.log("Antes del get");
            $.get("funciones/usuarios/datosUsuario.php", JSON.parse(dato_str_usuario),
                function (respuestaJson) {
                }
            ).done(function (respuestaJson) {
                    json = JSON.parse(respuestaJson);
                    $("#usernameModalEditar").val(json.username);
                    $("#passwordModalEditar").val(json.password);
                    $("#nombreModalEditar").val(json.nombre);
                    $("#apellido1ModalEditar").val(json.apellido1);
                    $("#apellido2ModalEditar").val(json.apellido2);
                    $("#correoModalEditar").val(json.correo);
                    $("#fechaModalEditar").val(json.fecha_nacimiento);
                    $("#paisModalEditar").val(json.pais);
                    $("#cpModalEditar").val(json.codigo_postal);
                    $("#telefonoModalEditar").val(json.telefono);
                    $("#rolModalEditar").val(json.rol);
                }
            ).fail(function () {
                    alert("Falla");
                    console.log("Falla");
                }
            )

        });

        $(".borrar").click(function ($e) {
            $("#idModalBorrar").val($e.currentTarget.value);
        });
    </script>

</div>
</body>
</html>