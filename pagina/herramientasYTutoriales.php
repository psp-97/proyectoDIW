<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <h1>Herramientas y Tutoriales</h1>
    <a href="masComentarios.php">
        <span class="enlace">Cuéntanos cómo haces tú los memes.</span>
    </a>
    <div class="row">
        <div class="col-sm-8">
            <div class="row" id="columna">
                <h4>¿Cómo hacer memes?</h4>
                <img src="images/Captura.PNG" width="500" alt="Sample Image" class="item-image"/>
                <p>Existen páginas como por ejemplo <a href="https://imgur.com/memegen/create/nTxcG3I">Imgur</a> en
                    las
                    que se puede hacer
                    memes desde plantillas a partir de otros memes, o personalizar otros, siempre sin ser desde 0.
                </p>
                <p>Por supuesto, siempre queda también la opción de hacerlos desde 0 con Photoshop o cualquier otro
                    editor
                    de fotos.</p>
            </div>
            <div class="row" id="columna">
                <h4>Tutorial de hacer memes</h4>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8mxFXTEcTCc" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-4" id="derecha">
            <h3>Coméntanos cómo haces tú los memes</h3>
            <textarea placeholder="Deja tu comentario aquí..."></textarea>
            <input type="submit" name="enviar" value="Comentar">
            <hr class="linea">
            <p id="pie"><a href="masComentarios.php">Más comentarios...</a></p>
        </div>
    </div>
</div>
<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
</body>
</html>