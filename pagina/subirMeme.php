<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>

<?php include("includes/navigation.php"); ?>

<div class="container">


    <div class="row content">

        <div class="col-10">

            <h2 class="aside-title">Subir meme</h2>
            <form action="" method="POST">
             <div class=row>
             <div class="col-md-4 col-sm-12"></div>
             <div class="col-md-2 col-sm-12">Titulo del meme </div>
             <div class="col-md-6 col-sm-12"><input class="formulario" type="text" id="titulo"></div>
                  
             </div>
             <hr>
             <div class=row>
             <div class="col-md-4 col-sm-12"></div>
             <div class="col-md-2 col-sm-12">Imagen: </div>
             <div class="col-md-3 col-sm-12"><div class="input-group">
 
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
            </div>
            </div>
            </div>
             </div>
             <hr>
             <div class=row>
             <div class="col-md-5 col-sm-12">   </div>
             <div class="col-md-7 col-sm-12"> <textarea class="formulario" name="message" rows="10" cols="30">Introduce aqui la descripcion.</textarea> </div>

             </div>

            <hr>
            <div class=row>
             <div class="col-md-6 col-sm-12"></div>
             <div class="col-md-6 col-sm-12"><input type="submit" name="submit" value="Subir" class="btn btn-primary"/></div>

             </div>

            <hr>
            

        </div>

    </div>





</div>

<div class="footer text-center">

    <p>&copy; <?php print date("Y");?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>

</div>


</body>
</html>