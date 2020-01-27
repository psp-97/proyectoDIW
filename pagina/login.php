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
<head><?php include("includes/head-tag-contents.php"); ?></head>
<body>
<?php
include("includes/navigation.php"); ?>

<div class="container">
    <div class="row content">
        <div class="col-md-6 col-sm-12">
            <?php
                if (isset($errorLogin) && $errorLogin){
                    echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
                }
            ?>
            <h2 class="aside-title">Iniciar Sesion</h2>
            <form action="" method="POST">
                <div class=row>
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">EMAIL:</div>
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
                <div class=row>
                    <div class="col-12 mt-4"></div>

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
        </div>


        <div class="col-md-1 d-none d-lg-block">
            <hr id="vertical">
        </div>

        <div class="col-md-5 col-sm-12">
        <?php
        $mensaje = "";
        if(isset($_POST['registrar'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $correo = $_POST['correo'];
            $otraVez = md5($_POST['otraVez']);
            if(!empty($username) && !empty($password) && !empty($correo)) {
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
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="correo" type="text" id="correo"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">USUARIO:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="username" type="text" id="usuario"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">CONTRASEÑA:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="password" type="password" id="contra"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">OTRA VEZ:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" name="otraVez" type="password" id="repe"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-5 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12"><input type="submit" name="registrar"
                                                           class="btn btn-outline-primary my-2 my-sm-0 login"
                                                           type="submit" value="Registrarse"></button></div>
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
</body>
</html>