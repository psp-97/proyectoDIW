<?php
require_once("funciones/contenido/funciones_contenido.php");
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <div class="row">
        <div class="col memes">
            <div class="row">
                <?php
                $contenido = getContenidoAleatorio();
                foreach ($contenido as $c){
                    ?>
                    <div class="col-md-5">
                        <div class="card m-20">
                            <a class="enlaceAMeme" href="meme.php">
                                <img src="images/memes/min/<?php echo $c->imagen;?>" alt="Sample Image" class="card-image m-20"/>
                                <div class="row">
                                    <div class="col text-left">
                                        <a class="fuente" href="<?php echo $c->fuente; ?>">Fuente: <?php echo $c->fuente; ?></a>
                                    </div>
                                </div>
                                <p class="card-content"><?php echo $c->descripcion; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</div>
</body>
</html>