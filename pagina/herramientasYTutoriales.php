<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>
        video {
	width: 100%;
	height: auto;
}

/*
#video-container {
	width: 640px;
	height: 365px;
	position: relative;
}
*/
#video-controls {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	padding: 5px;
	opacity: 0;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	-o-transition: opacity .3s;
	-ms-transition: opacity .3s;
	transition: opacity .3s;
	background-image: linear-gradient(bottom, #2B33EB, rgb(0,136,204) 100%);
	background-image: -o-linear-gradient(bottom,#2B33EB, rgb(0,136,204) 100%);
	background-image: -moz-linear-gradient(bottom, #2B33EB, rg#E8F4FA rgb(3,113,168) 13%, rgb(0,136,204) 100%);
	background-image: -ms-linear-gradient(bottom, #2B33EB, rgb(0,136,204) 100%);

	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.13,#2B33EB),
		color-stop(1, #2B33EB)
	);
}

#video-container:hover #video-controls {
	opacity: .9;
}

button {
	background: #E8F4FA;
	border: 0;
	color: black;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
}

button:hover {
	cursor: pointer;
}

#seek-bar {
	width: 360px;
}

#volume-bar {
	width: 60px;
}
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
			            <div class="col-sm-1">
				            <button type="button" id="play-pause" class="play">Play</button>
			            </div>
			            <div class="col-sm-7">
				            <input type="range" id="seek-bar" value="0">
			            </div>
			            <div class="col-sm-1">
				            <button type="button" id="mute">Mute</button>
			            </div>
			            <div class="col-sm-2">
				            <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
			            </div>
			            <div class="col-sm-1">
				            <button type="button" id="full-screen">Full</button>
			            </div>
		            </div>
	            </div>
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