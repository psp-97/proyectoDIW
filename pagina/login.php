<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <div class="row content">
        <div class="col-md-7 col-sm-12">
            <h2 class="aside-title">Iniciar Sesion</h2>
            <form action="" method="POST">
                <div class=row>
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-2 col-sm-12">EMAIL:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" type="text" id="correo"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-2 col-sm-12">CONTRASEÑA:</div>
                    <div class="col-md-6 col-sm-12"><input class="formulario" type="password" id="contra"></div>
                </div>
                <hr>
                <div class=row>
                    <div class="col-md-5 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12"><input type="submit"
                                                           class="btn btn-outline-primary my-2 my-sm-0 login"
                                                           type="submit" value="Iniciar Sesión    "></button></div>
                </div>
                <hr>
        </div>
        <div class="col-lg-5 col-sm-12">
            <div class=row>
                <div class="col-md-1 d-none d-lg-block">
                    <hr id="vertical">
                </div>
                <div class="col-md-11">
                    <h2 class="aside-title">Registrar con GOOGLE</h2>
                    <div class="col-md-6 d-none d-lg-block"><br></div>
                    <div class="col-md-8">
                        <hr>
                    </div>
                    <div class=row>
                        <div class="col-6">
                            <input type="image" name="submit" src="images/iconos/logingoogle.png" border="0" alt="Submit"
                                   style="width: 200px;"/>
                        </div>
                    </div>
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