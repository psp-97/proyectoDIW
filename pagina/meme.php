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
            <h2 class="aside-title">Título del meme</h2>
            <img src="images/meme1.jpeg" alt="Sample Image" class="img-fluid imagen-meme"/>
            <div class="float-right">
                <img class="logito" src="images/like.png" alt="coment">
                <img class="logito" src="images/coment.png" alt="coment">
                <img class="logito" src="images/share.png" alt="share">
            </div>
            <div class="descripcion">
                <h3 class="aside-title">Descripción</h3>
                <p>Frankly, it's ludicrous to have these interlocking bodies and not...interlock.
                    My Uncle Rory was the stodgiesey! I wa me. If I could make you purtier, I would.</p>
            </div>
            <hr>
            <div class="row comentarios">
                <h4 class="aside-title">Comentarios</h4>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/like.png" alt="like">
                    </div>
                    <h6>Nombre del que comenta</h6>
                    <p>De los peores memes que se recuerdan.</p>
                </div>
                <div class="col-12 comentario">
                    <div class="float-right">
                        <img class="logito" src="images/like.png" alt="like">
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