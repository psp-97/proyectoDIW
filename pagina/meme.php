<?php
session_start();
include "funciones/contenido/funciones_contenido.php";
include "funciones/valoraciones/funciones_valoraciones.php";

//include "funciones/Conexion.php";
include "funciones/usuarios/funciones_usuario.php";
if (!isset($_GET['id'])) {
    header("Location:index.php");
}

if (isset($_POST['memeSemana'])) {
    nuevoMemeSemana($_POST['id']);
}

if (isset($_POST['borrarMeme'])) {
    borrarMeme($_POST['id']);
    header("Location:index.php");
}


?>
<!DOCTYPE html>


<html>
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<?php

$memeSemana = getcontenidoSemana();
$meme = getContenidoId($_GET['id']);
//$valoracionMeme = getValoracionId($_GET['id']);




//$valoracionMeGusta = getMeGustaId($_GET['id'],$_SESSION['usuario'][0]->id);

//$contenido = getValoracionId($_GET['id']);

?>
<div class="container">
    <?php
    if (isset($_SESSION['usuario']) && $_SESSION['usuario'][0]->rol == "administrador") {
        if ($meme->id == $memeSemana->id) {
            echo "<div class='alert alert-primary'>Este es el meme de la semana</div>";
        } else {
            ?>

            <div class="alert alert-primary">
                <div class="row">
                    <form action="" method="post">
                        Para hacerlo el meme de la semana pulse
                        <input type="text" name="id" value="<?php echo $meme->id; ?>" hidden>
                        <input class="btn btn-primary" type="submit" name="memeSemana" value="aqui">
                    </form>
                    <form style="margin-left: 20px;" action="" method="post">
                        <input type="text" name="id" value="<?php echo $meme->id; ?>" hidden>
                        <input class="btn btn-danger" type="submit" name="borrarMeme" value="Borrar meme">
                    </form>
                </div>
            </div>

            <?php
        }
    }
    ?>
    <div class="row content">
        <div class="fixed-bottom text-right">
            <a href="index.php">
                <button type="button" class="btn btn-circle btn-xl"><i class="fa fa-caret-left"></i>
                </button>
            </a>
        </div>
        <div class="col-10">
            <img src="images/memes/<?php echo $meme->imagen; ?>" alt="Sample Image" class="img-fluid imagen-meme"/>
            <div class="row">
                <div class="col text-left">
                    <a class="fuente" href="<?php echo $meme->fuente; ?>">Fuente: <?php echo $meme->fuente; ?></a>
                </div>
            </div>
            <div class="float-right">
                <?php

                // Si existe un usuario logueado recogeremos las acciones del boton me gusta
                if (isset($_SESSION["usuario"])) {

                    if (isset($_POST['me_gusta1'])) {
                        updateMeGustaId($_GET['id'], $_SESSION['usuario'][0]->id, 1);
                    }
                    if (isset($_POST['nome_gusta1'])) {
                        updateMeGustaId($_GET['id'], $_SESSION['usuario'][0]->id, 0);
                    }
                
                    if (isset($_POST['me_gusta2'])) {
                        setMeGustaId($_GET['id'], $_SESSION['usuario'][0]->id, 1);
                    }
                    if (isset($_POST['nome_gusta2'])) {
                        setMeGustaId($_GET['id'], $_SESSION['usuario'][0]->id, 0);
                    }
                }

                // Recargamos el icono de megusta
                if (isset($_SESSION["usuario"])) {
                    $valoracionMeGusta = getMeGustaId($_GET['id'], $_SESSION['usuario'][0]->id);
                }

                // Si hay un usuario logueado podremos mostrar el boton de megusta
                if (isset($_SESSION["usuario"])) {

                    // Si ya hay un megusta/no_megusta en la base estos botones editaran el estado de si/no
                    if ($valoracionMeGusta != null) {
                        ?>
                        <form action="" method="POST">
                            <?php
                            // Si esta en estado no_megusta el boton lo cambiara a megusta
                            if ($valoracionMeGusta->megusta == 0) {
                                ?>
                                
                                <button type="submit" name="me_gusta1" >
                                    <img class="logito" src="images/iconos/like.png" alt="coment">
                                </button>
                                

                                <!--
                                <input type="image" name="me_gusta1" id="me_gusta1" src="images/iconos/like.png"/>
                                -->

                                <?php
                            }
                            // Si esta en estado megusta el boton lo cambiara a no_megusta
                            else {
                                ?>
                                
                                <button type="submit" name="nome_gusta1" >
                                    <img class="logito" src="images/iconos/likeok.png" alt="coment">
                                </button>
                                

                                <!--
                                <input type="image" name="nome_gusta1" id="nome_gusta1" src="images/iconos/likeok.png"/>
                                -->

                                <?php
                            }

                            ?>

                            <!--
                            <input type="submit" name="me_gusta1" value="Me gusta" class="btn btn-primary"/>
                            <input type="submit" name="nome_gusta1" value="No me gusta" class="btn btn-primary"/>
                            <button type="button" data-toggle="modal"
                                data-target="#borrarComentario" value="<?php echo $valoracionMeme->id; ?>">
                                <img class="logito" src="images/iconos/like.png" alt="coment">
                            </button>
                            -->
                        </form>

                        <?php


                    // Si no hay un megusta/no_megusta en la base estos botones crearan el registro megusta
                    } else {
                        ?>
                        <!--
                        <form action="" method="POST">
                        <input type="image" name="me_gusta2" id="me_gusta2" src="images/iconos/like.png"/>
                        </form>
                        -->

                        
                        <form action="" method="POST">
                        <button type="submit" name="me_gusta2" >
                            <img class="logito" src="images/iconos/like.png" alt="coment">
                        </button>
                        </form>
                        

                        <?php
                    }
                }
                ?>

                <!--
                <img class="logito" src="images/iconos/coment.png" alt="coment">
                <img class="logito" src="images/iconos/share.png" alt="share">
                -->


            </div>
            <div class="descripcion">
                <h3 class="aside-title">Descripción</h3>
                <p><?php if ($meme->descripcion != "") {
                        echo $meme->descripcion;
                    } else {
                        echo "(Sin descripción)";
                    } ?></p>
            </div>
            <hr>

            <?php
            if (isset($_POST['submit'])) {
                $comentario = $_POST['comentario'];
                if ($comentario == null) {
                    echo "<div class='alert alert-danger'>Debe rellenar el comentario si desea enviarlo</div>";
                } else {
                    addValoracion($_SESSION['usuario'][0]->id, $meme->id, $comentario);
                    echo "<div class='alert alert-success'>Comentario añadido correctamente</div>";
                }
            }

            if (isset($_POST['borrarComentario'])) {
                if (delValoracion($_POST['idComentario'])) {
                    echo "<div class='alert alert-success'>Comentario borrado con éxito</div>";
                    $valoracion = getValoracionId($_GET['id']);
                } else {
                    echo "<div class='alert alert-danger'>Error al borrar el comentario</div>";
                }
            }

            $valoracion = getValoracionId($_GET['id']);


            if (isset($_SESSION['usuario'])) {
            ?>
            <div class="row comentarios">
                <h4 class="aside-title">Comentarios</h4>
                <div class="col-12 comentario">
                    <form action="" method="POST">
                        <div class=row>
                            <div class="col-md-12 col-sm-12">COMENTARIO:</div>
                            <div class="col-md-12 col-sm-12"><input class="formulario" type="text" style="width:100%"
                                                                    id="comentario" name="comentario"
                                                                    placeholder="Escriba aqui su comentario"></div>
                        </div>
                        <br>
                        <div class=row>
                            <div class="col-md-6 col-sm-12"></div>
                            <div class="col-md-6 col-sm-12"><input type="submit" name="submit" value="Enviar Comentario"
                                                                   class="btn btn-primary"/></div>
                        </div>
                        <br>
                    </form>
                </div>
                <?php
                }
                else {
                ?>
                <div class="row comentarios">
                    <h4 class="aside-title">Comentarios</h4>
                    <div class="col-12 comentario">
                        <form action="login.php" method="">
                            <div class=row>
                                <div class="col-md-12 col-sm-12">NECESITA INICIAR SESION PARA PODER HACER UN
                                    COMENTARIO
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5 col-sm-12"></div>
                                <div class="col-md-7 col-sm-12"><input type="submit"
                                                                       class="btn btn-outline-primary my-2 my-sm-0 login"
                                                                       type="submit" value="lOG IN"
                                                                       name="login"></button></div>
                            </div>
                            <br>
                        </form>
                    </div>

                    <?php
                    }
                    ?>

                    <?php


                    if ($valoracion != null) {

                    foreach ($valoracion as $valoracionMeme) {


                        //while ($object=$valoracionMeme->fetch_object()) { //Si hay los recorremos
                        //foreach ($valoracion as $valoracionMeme) {

                        //foreach ($valoracionMeme as $c){
                        ?>

                        <div class="col-12 comentario">
                            <h6><?php echo $valoracionMeme->username; ?></h6>
                            <p>
                                <?php
                                //echo $valoracion->comentario;
                                echo $valoracionMeme->comentario;

                                if (isset($_SESSION['usuario']) &&
                                    ($_SESSION['usuario'][0]->rol == "administrador" || $_SESSION['usuario'][0]->rol == "editor")) {
                                    ?>
                                    <button type="button" class="btn btn-danger borrar" data-toggle="modal"
                                            data-target="#borrarComentario" value="<?php echo $valoracionMeme->id; ?>">
                                        Borrar
                                    </button>
                                    <?php
                                }
                                ?>
                            </p>
                        </div>

                        <div class="modal fade" id="borrarComentario" tabindex="-1" role="dialog"
                             aria-labelledby="ModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">¿Está seguro de que desea borrar este
                                            comentario?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                Esta accion eliminara este comentario por completo y no se podra
                                                recuperar.
                                            </div>
                                            <div class="form-group">
                                                <label for="idComentario" class="col-form-label">Id Comentario:</label>
                                                <input type="text" class="form-control" id="idComentarioBorrar"
                                                       name="idComentario" readonly>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <button type="submit" name="borrarComentario" class="btn btn-danger">
                                                Borrar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                        <script>
                            $(".borrar").click(function ($e) {
                                $("#idComentarioBorrar").val($e.currentTarget.value);
                            });
                        </script>

                        <script src="js/jquery.validate.min.js"></script>


                    <?php
                    //}
                    }
                    else {
                    ?>
                        <div class="col-12 comentario">
                            <p>No existen comentarios para este meme, se el primero en comentar</p>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center">
        <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
    </div>
</body>
</html>