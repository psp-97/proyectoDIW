<?php session_start();
include("funciones/Conexion.php");
include("funciones/usuarios/funciones_usuario.php");
include("funciones/login/funciones_login.php");


if (isset($_SESSION['usuario'])) {
    header("Location:index.php");
}

if (isset($_POST['login'])) {

    $usuario = getUser();

    if (empty($usuario)) {
        $errorLogin = true;
        //echo "Nombre de usuario o contraseña no reconocidos";
    } else {
        $_SESSION['usuario'] = $usuario;
        header("Location:index.php");
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php");
    ?>
</head>
<body>
<?php
include("includes/navigation.php"); ?>

<div class="container">
    <div class="row content">
        <div class="col-md-6 col-sm-12">
            <?php
            if (isset($errorLogin) && $errorLogin) {
                echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
            }
            ?>
            <h2 class="aside-title">Iniciar Sesion</h2>
            <form action="" method="POST">
                <div class=row>
                    <div class="col-md-3 col-sm-12"></div>
                    <div id="email" class="col-md-3 col-sm-12">EMAIL:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" type="text" id="correo" name="email">
                    </div>
                </div>
                <hr>

                <div class=row>
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">CONTRASEÑA:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" type="password" id="contra" name="pass">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-5 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12"><input type="submit"
                                                           class="btn btn-outline-primary my-2 my-sm-0 login"
                                                           type="submit" value="Iniciar Sesión" name="login"></button>
                    </div>
                </div>
                <hr>
            </form>

            <div class=row>
                <div class="col-md-5 col-sm-12 mt-4"></div>
                <div id="dropdownLoginLI" class="col-md-7 col-sm-12">
                    <button name="google" id="googleSignInBtn" class="btn btn-outline-primary my-2 my-sm-0 login">SIGN
                        IN WITH GOOGLE
                    </button>
                </div>

                <form method="POST">
                    <div id="dropdownLogoutLI" class="col-md-7 col-sm-12" style="display:none;">
                        <button id="googleSignOutBtn" onclick="signOut()"
                                class="btn btn-outline-primary my-2 my-sm-0 login">SIGN OUT
                        </button>
                    </div>
            </div>
            </form>
        </div>


        <div class="col-md-1 d-none d-lg-block">
            <hr id="vertical">
        </div>

        <div class="col-md-5 col-sm-12">
            <?php
            $mensaje = "";
            if (isset($_POST['registrar'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $correo = $_POST['correo'];
                $otraVez = md5($_POST['otraVez']);
                if (!empty($username) && !empty($password) && !empty($correo)) {
                    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                        if ($password == $otraVez) {
                            registrar($username, $password, $correo);
                            $mensaje = "<div class='alert alert-success'>Usuario creado correctamente</div>";
                        } else {
                            $mensaje = "<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
                        }
                    } else {
                        $mensaje = "<div class='alert alert-danger'>Correo electrónico no válido</div>";
                    }

                } else {
                    $mensaje = "<div class='alert alert-danger'>Debe rellenar todos los campos</div>";
                }

            }
            ?>
            <form action="" method="POST">
                <div class=row>
                    <div class="col-12">
                    <span>
                        <?php echo $mensaje; ?>
                    </span>
                        <h2 class="aside-title">Registrar</h2>
                    </div>
                </div>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">EMAIL:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="correo" type="text" id="correo">
                    </div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">USUARIO:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="username" type="text" id="usuario">
                    </div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">CONTRASEÑA:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="password" type="password"
                                                           id="contra"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">OTRA VEZ:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="otraVez" type="password" id="repe">
                    </div>
                </div>
                <hr>
                <div class=row>
                    <div class="col">
                        Resuelve la operación
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="text" id="primerElemento" readonly>
                    </div>
                    <div class="col-1">
                        <input type="text" id="operacion" readonly>
                    </div>
                    <div class="col-1">
                        <input type="text" id="segundoElemento" readonly>
                    </div>
                    <div class="col-1">
                        <input type="text" id="resultado" onkeyup="calcular()">
                    </div>
                    <div class="alert alert-danger" id="errorResultado">
                        Introduce el resultado corecto para enviar el formulario
                    </div>
                </div>

                <script>
                    var operaciones = ["+", "-", "*", "/"];
                    var operacionN = Math.round(Math.random() * 3);
                    var operacion = operaciones[operacionN];
                    document.getElementById("operacion").value = operacion;

                    var numero1 = Math.round(Math.random() * 11);
                    document.getElementById("primerElemento").value = numero1;

                    var numero2 = Math.round(Math.random() * 11);
                    document.getElementById("segundoElemento").value = numero2;


                    function calcular() {
                        var correcto = false;
                        switch (operacion) {
                            case "+":
                                if (numero1 + numero2 == document.getElementById("resultado").value) {
                                    correcto = true;
                                }
                                break;
                            case "-":
                                if (numero1 - numero2 == document.getElementById("resultado").value) {
                                    correcto = true;
                                }
                                break;
                            case "*":
                                if (numero1 * numero2 == document.getElementById("resultado").value) {
                                    correcto = true;
                                }
                                break;
                            case "/":
                                if (numero1 / numero2 == document.getElementById("resultado").value) {
                                    correcto = true;
                                }
                                break;
                        }
                        if (correcto) {
                            document.getElementById("registrar").removeAttribute("disabled");
                            document.getElementById("errorResultado").setAttribute("hidden", "hidden");
                        } else {
                            document.getElementById("registrar").setAttribute("disabled", "disabled");
                            document.getElementById("errorResultado").removeAttribute("hidden");
                        }
                    }


                </script>


                <hr>
                <div class=row>
                    <div class="col-md-5 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12"><input type="submit" name="registrar" id="registrar"
                                                           class="btn btn-outline-primary my-2 my-sm-0 login"
                                                           type="submit" value="Registrarse" disabled></button></div>
                </div>
            </form>
            <hr>


        </div>

    </div>
</div>
</div>

<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
<script>startApp();</script>
</body>
</html>