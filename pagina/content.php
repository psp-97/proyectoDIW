<?php
include ("funciones/contenido/funciones_contenido.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 memes">
            <div class="row enlace">
                <div class="col-12 d-md-none">
                    <h3 class="enlace"><a href="memeSemana.php">¿Quieres ver el meme de la semana? Pulsa aquí</a></h3>
                </div>
            </div>
            <?php
            $contenido = getContenidoLast();
            foreach ($contenido as $c) {
                ?>
                <a class="enlaceAMeme" href="meme.php">
                    <div class="card">
                        <img src="images/memes/<?php echo $c->imagen; ?>" alt="Sample Image" class="card-image"/>
                        <div class="row">
                            <div class="col text-left">
                                <a class="fuente" href="<?php echo $c->fuente; ?>">Fuente:
                                    <?php echo $c->fuente; ?></a>
                            </div>
                        </div>
                        <p class="card-content"><?php echo $c->descripcion; ?></p>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
        <div class="col-md-4 d-none d-md-block lateral">
            <div class="row">
                <div class="col-12 aside">
                    <a class="enlaceAMeme" href="meme.php">
                        <h3 class="aside-title">Meme de la semana</h3>
                        <img src="images/memes/min/pineapple.jpg" alt="Sample Image" class="item-image"/>
                        <div class="row">
                            <div class="col text-right">
                                <a class="fuente" href="https://9gag.com/">Fuente: www.9gag.com</a>
                            </div>
                        </div>
                        <p>Este meme se ha merecido el galardón a meme de la semana tras ser el más votado
                            por nuestros visitantes. ¡Enhorabuena al creador!</p>
                    </a>
                </div>
                <div class="col-12 aside">
                    <h3 class="aside-title">Ranking de usuarios</h3>
                    <ol class="text-center">
                        <li id="primero">Pedro</li>
                        <li id="segundo">Alberto</li>
                        <li id="tercero">Trujillo</li>
                        <li>Cobos</li>
                        <li>Alberto</li>
                        <li>Carlos</li>
                    </ol>
                </div>
                <div class="col-12 aside">
                    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de
                            Comares.</a></p>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</div>