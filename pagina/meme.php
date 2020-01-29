<?php
session_start();
include "funciones/contenido/funciones_contenido.php";
include "funciones/valoraciones/funciones_valoraciones.php";
if (!isset($_GET['id'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<?php
$meme = getContenidoId($_GET['id']);
$valoracionMeme = getValoracionId($_GET['id']);
?>
<div class="container">
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
                <img class="logito" src="images/iconos/like.png" alt="coment">
                <img class="logito" src="images/iconos/coment.png" alt="coment">
                <img class="logito" src="images/iconos/share.png" alt="share">
            </div>
            <div class="descripcion">
                <h3 class="aside-title">Descripción</h3>
                <p><?php if ($meme->descripcion != ""){
                        echo $meme->descripcion;
                    }else{
                        echo "(Sin descripción)";
                    }  ?></p>
            </div>
            <hr>
            <div class="row comentarios">
                <h4 class="aside-title">Comentarios</h4>
                <div class="col-12 comentario">
                    <form action="" method="POST">
                    <div class=row>
                        <div class="col-md-12 col-sm-12">COMENTARIO:</div>
                        <div class="col-md-12 col-sm-12"><input class="formulario" type="text" style="width:100%" id="correo" name="email"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12"></div>
                        <div class="col-md-7 col-sm-12"><input type="submit"
                            class="btn btn-outline-primary my-2 my-sm-0 login"
                            type="submit" value="Enviar Comentario" name="comentar"></button></div>
                    </div>
                    <hr>
                </form>
                </div>
                
            





                <?php
                if ($valoracionMeme != null) {


                    
                    //while ($object=$valoracionMeme->fetch_object()) { //Si hay los recorremos
                        //foreach ($valoracion as $valoracionMeme) {
                        ?>
                        <div class="col-12 comentario">
                            <h6><?php echo $valoracionMeme->username; ?></h6>
                            <p>
                                <?php 
                                    //echo $valoracion->comentario;
                                    echo $valoracionMeme->comentario;
                                ?>
                            </p>
                        </div>
                        
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