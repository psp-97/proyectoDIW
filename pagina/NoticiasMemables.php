<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Noticias Memables</title>
    -->
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>
<?php include("includes/navigation.php");?>

<div class="container">
        <h1>Noticias memables</h1>
        <a href="masComentarios.php">
            <span class="enlace">Comenta noticias para memes.</span>
        </a>
        <div class="row">
            <div class="col-sm-8">
                <div class="row" id="columna">
                    <h4>Gobierno entre PSOE y Podemos</h4>
                    <div>
                        <img id="imagen" src="images/meme1.jpg">
                        <img id="imagen" src="images/meme2.jpg">
                        <p>El nuevo gobierno que parece que estará formado por la izquierda está dando mucho que hablar
                            en las redes, y no han tardado en hacer memes.</p>
                    </div>
                </div>
                <div class="row" id="columna">
                    <h4>El debate de Albert Rivera</h4>
                    <div>
                        <img id="imagen" src="images/meme3.jpg">
                        <img id="imagen" src="images/meme4.jpg">
                    </div>
                    <p>Sin duda, junto con el "lapsus" de Iglesias, el momento que más se ha aprovechado para hacer
                        memes.</p>
                </div>
            </div>

            <div class="col-sm-4" id="derecha">
                <h3>Coméntanos las noticias que veas para hacer más memes</h3>
                <textarea placeholder="Deja tu comentario aquí..."></textarea>
                <input type="submit" name="enviar" value="Comentar">
                <hr class="linea">
                <p id="pie"><a href="masComentarios.php">Más comentarios...</a></p>
            </div>
        </div>
    </div>
</body>

</html>