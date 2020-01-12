<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>
        #imagen2 {
            width: 630px;
            height: 370px; }
    </style>
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
                <img src="images/memes/Captura.PNG" width="500" alt="Sample Image" class="item-image"/>
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
                <div id="video-container">
                    <!-- Video -->
                    <video id="video">
                        <source src="videos/ComoHacerMemesFacilmente_1.webm" type="video/webm">
                        <source src="videos/ComoHacerMemesFacilmente.ogv" type="video/ogv">
                        <source src="videos/ComoHacerMemesFacilmente.mp4" type="video/mp4">
                        <p>
                            Your browser doesn't support HTML5 video.
                            <a href="videos/ComoHacerMemesFacilmente.mp4">Download</a> the video instead.
                        </p>
                    </video>
                    <!-- Video Controls -->
                    <div class="row" id="video-controls">
                        <div class="col-l-1">
                            <button type="button" id="play-pause" class="play">Play</button>
                        </div>
                        <div class="col-l-7">
                            <input type="range" id="seek-bar" value="0">
                        </div>
                        <div class="col-l-1">
                            <button type="button" id="mute">Mute</button>
                        </div>
                        <div class="col-l-2">
                            <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                        </div>
                        <div class="col-l-1">
                            <button type="button" id="full-screen">Full</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="columna">
                <h4>Facebook saca su propia herramienta para crear memes</h4>
                <img id="imagen2" src="images/memes/noticiasMemables/face.png">                <p>Existen páginas como por ejemplo <a href="https://imgur.com/memegen/create/nTxcG3I">Imgur</a> en
                    las
                    que se puede hacer
                    memes desde plantillas a partir de otros memes, o personalizar otros, siempre sin ser desde 0.
                </p>
                <p>Por supuesto, siempre queda también la opción de hacerlos desde 0 con Photoshop o cualquier otro
                    editor
                    de fotos.</p>
            </div>
            <div class="row" id="columna">
                <h4>¿Cómo hacer memes?</h4>
                <img src="images/memes/Captura.PNG" width="500" alt="Sample Image" class="item-image"/>
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
                <h4>¿Cómo hacer memes?</h4>
                <img src="images/memes/Captura.PNG" width="500" alt="Sample Image" class="item-image"/>
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
                <h4>¿Cómo hacer memes?</h4>
                <img src="images/memes/herramientasYTutoriales/Captura.PNG" width="500" alt="Sample Image" class="item-image"/>
                <p>Existen páginas como por ejemplo <a href="https://imgur.com/memegen/create/nTxcG3I">Imgur</a> en
                    las
                    que se puede hacer
                    memes desde plantillas a partir de otros memes, o personalizar otros, siempre sin ser desde 0.
                </p>
                <p>Por supuesto, siempre queda también la opción de hacerlos desde 0 con Photoshop o cualquier otro
                    editor
                    de fotos.</p>
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
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</div>
</body>
</html>