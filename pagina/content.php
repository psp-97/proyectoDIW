<?php
include ("funciones/contenido/funciones_contenido.php");
include ("funciones/usuarios/funciones_usuario.php");
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
                if (!isset($_COOKIE['novedades'])){
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-11">
                                Hay nuevas y frescas noticias en nuestra web :D
                                </div>
                                <div class="col-1">
                                <input type="submit" class="btn btn-primary" name="novedades" value="X">
                                </div>
                            </div>
                        </form>
                    </div>
             <?php
                }
            $contenido = getContenidoLast();
            foreach ($contenido as $c) {
                ?>
                <a class="enlaceAMeme" href="meme.php?id=<?php echo $c->id; ?>">
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
                    <?php
                    $memeSemana = getcontenidoSemana();
                    ?>
                    <a class="enlaceAMeme" href="meme.php?id=<?php echo $memeSemana->id; ?>">
                        <h3 class="aside-title">Meme de la semana</h3>
                        <img src="images/memes/<?php echo $memeSemana->imagen; ?>" alt="Sample Image" class="item-image"/>
                        <div class="row">
                            <div class="col text-right">
                                <a class="fuente" href="<?php echo $memeSemana->fuente; ?>">Fuente: <?php echo $memeSemana->fuente; ?></a>
                            </div>
                        </div>
                        <p>Este meme se ha merecido el galardón a meme de la semana tras ser el más votado
                            por nuestros visitantes. ¡Enhorabuena al creador!</p>
                    </a>
                </div>
<!--                <div class="col-12 aside">-->
<!--                    <h3 class="aside-title">Ranking de usuarios</h3>-->
<!--                    <ol class="text-center">-->
<!--                        --><?php
//                            $publicaciones = [];
//                            $id_ordenados = [];
//                            $id_usuarios = getIdUsuarios();
//                            foreach($id_usuarios as $id) {
//                                $publicaciones[] = getPublicacionesPorUsuario($id)->contador;
//                            }
//                            rsort($publicaciones);
//                            foreach ($publicaciones as $p) {
//                                $id_ordenados[] = getIdPorPublicaciones($p);
//                            }
//                            foreach ($id_ordenados as $id) {
//                                echo "<li>".getUsuario($id)->username."</li>";
//                            }
//                        ?>
<!--                    </ol>-->
<!--                </div>-->
                <div class="col-12 aside">
                    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de
                            Comares.</a></p>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</div>