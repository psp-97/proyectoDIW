<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <div class="row content">
        <div class="fixed-bottom text-right">
            <a href="index.php">
                <button type="button" class="btn btn-circle btn-xl"><i class="fa fa-caret-left"></i>
                </button>
            </a>
        </div>
        <div class="col-10">
            <img src="images/memes/index/pineapple.jpg" alt="Sample Image" class="img-fluid imagen-meme"/>
            <div class="row">
                <div class="col text-left">
                    <a class="fuente" href="https://9gag.com/">Fuente: www.9gag.com</a>
                </div>
            </div>
            <div class="float-right">
                <img class="logito" src="images/iconos/like.png" alt="coment">
                <img class="logito" src="images/iconos/coment.png" alt="coment">
                <img class="logito" src="images/iconos/share.png" alt="share">
            </div>
            <div class="descripcion">
                <h3 class="aside-title">Descripción</h3>
                <p>Este meme se ha merecido el galardón a meme de la semana tras ser el más votado
                    por nuestros visitantes. ¡Enhorabuena al creador!</p>
            </div>
            <hr>
            <div class="row comentarios">
                <h4 class="aside-title">Comentarios</h4>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/iconos/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/iconos/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/iconos/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/iconos/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/iconos/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
</body>
</html>