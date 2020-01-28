<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php");?>
    <style>
        #imagen2 {
            width: 630px;
            height: 370px; }
    </style>
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
                        <img id="imagen" src="images/noticiasMemables/meme1.jpg">
                        <img id="imagen" src="images/noticiasMemables/meme2.jpg">
                        <p>El nuevo gobierno que parece que estará formado por la izquierda está dando mucho que hablar
                            en las redes, y no han tardado en hacer memes.</p>
                    </div>
                </div>
                <div class="row" id="columna">
                    <h4>El debate de Albert Rivera</h4>
                    <div>
                        <img id="imagen" src="images/noticiasMemables/meme3.jpg">
                        <img id="imagen" src="images/noticiasMemables/meme4.jpg">
                    </div>
                    <p>Sin duda, junto con el "lapsus" de Iglesias, el momento que más se ha aprovechado para hacer
                        memes.</p>
                </div>
                <div class="row" id="columna">
                    <h4>El Sporting de Uruguay ficha a un entrenador parecido a Walter White</h4>
                    <div>
                        <img src="images/noticiasMemables/entrenador.jpeg">
                    </div>
                    <p>Las redes se están volviendo locas con el nuevo entrenador del Sporting de Uruguay.
                    <a href="https://www.20minutos.es/deportes/noticia/4098017/0/alejandro-orfila-entrenador-defensor-walter-white-breaking-bad/">Enlace de la noticia para saber más.</a>
                    </p>
                </div>
                <div class="row" id="columna">
                    <h4>El vestido de Cristina Pedroche</h4>
                    <div>
                        <img id="imagen2" src="images/noticiasMemables/vestido.jpg">
                    </div>
                    <p>Como todos los años, el vestido de Cristina Pedroche da mucho que hablar y los creadores de memes siempre se frotan las manos con esto todos los años.
                    <a href="https://www.20minutos.es/noticia/4103002/0/los-memes-del-vestido-de-cristina-pedroche-en-las-campanadas-gana-c-3po-el-robot-de-star-wars/">Enlace de la noticia para saber más.</a>
                    </p>
                </div>
                <div class="row" id="columna">
                    <h4>La famosa bola en la mano de la lotería</h4>
                    <div>
                        <img id="imagen2" src="images/noticiasMemables/mano.jpg">
                    </div>
                    <p>Dicen algunos que la lotería estuvo amañada por una foto donde se ve que el hombre encargado de sacar las bolas llevaba una bola escondida en su mano...
                    <a href="https://www.20minutos.es/noticia/4096899/0/memes-bola-loteria-navidad/">Enlace de la noticia para saber más.</a>
                    </p>
                </div>
                <div class="row" id="columna">
                    <h4>El barcelona vs Real Madrid</h4>
                    <div>
                        <img id="imagen2" src="images/noticiasMemables/clasico.jpg">
                    </div>
                    <p>El gran clásico del fútbol español es un evento de gran revuelo y siempre da para muchos memes.
                    <a href="https://www.20minutos.es/deportes/noticia/4093249/0/memes-clasico-barcelona-real-madrid/">Enlace de la noticia para saber más.</a>
                    </p>
                </div>
                <div class="row" id="columna">
                    <h4>El viaje de Greta Thunberg en Madrid</h4>
                    <div>
                        <img id="imagen2" src="images/noticiasMemables/greta.png">
                    </div>
                    <p>Los memes se ceban con Greta Thunberg cada vez que tiene que hacer un transporte. En este caso tenemos el que realizó a Madrid
                    <a href="https://www.20minutos.es/gonzoo/noticia/4075882/0/memes-greta-thungberg-llegada-lisboa-cop25-madrid-2019/">Enlace de la noticia para saber más.</a>
                    </p>
                </div>
                <div class="row" id="columna">
                    <h4>La semifinal de Supercopa Barça - Atlético</h4>
                    <div>
                        <img id="imagen2" src="images/noticiasMemables/barca.jpg">                    </div>
                    <p>La polémica semifinal ha dado muchos memes, algunos no tienen desperdicio.
                    <a href="https://www.elespanol.com/deportes/futbol/20200109/mejores-memes-barcelona-atletico-madrid-supercopa-espana/458484151_3.html">Enlace de la noticia para saber más.</a>
                    </p>
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
<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</div>

</body>
</html>