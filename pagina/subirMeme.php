<?php require_once("funciones/contenido/funciones_contenido.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php");
?>
<div class="container">
    <div class="row content">
        <div class="col-10">
            <h2 class="aside-title">Subir meme</h2>
            <?php
            if (isset($_POST['submit'])) {      
                $imagen = $_FILES['imagen']['name'];          
                $descripcion = $_POST['descripcion'];
                $fuente = $_POST['fuente'];
                if ($fuente == null || $imagen == null || $descripcion == null) {
                    echo "<h3>DEBE RELLENAR TODOS LOS CAMPOS</h3>";
                } else {
                    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                        $fich_unique = time(). $imagen;
                        $ruta = "images/memes/" . $fich_unique;
                        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    }
                    addContenido(1, $descripcion, $fich_unique, $fuente);
                    echo "<h3>MEME AÑADIDO CORRECTAMENTE</h3>";
                }
            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class=row>
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-2 col-sm-12">Imagen:</div>
                    <div class="col-md-3 col-sm-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="imagen" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-2 col-sm-12">Fuente:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" type="text" name="fuente"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-5 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12"><textarea class="formulario" name="descripcion" rows="10" cols="30" placeholder="Introduce aquí la descripción..."></textarea>
                    </div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-6 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12"><input type="submit" name="submit" value="Subir" class="btn btn-primary"/></div>
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>
<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
</body>
</html>