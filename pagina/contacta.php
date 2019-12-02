<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <div class="row content ">
        <div class="col-12">
        <h2 class="aside-title">Contacta con nosotros</h2>
        <div class="col-md-4 col-sm-12">
            <hr>
        </div>
        <div class="box expl">
            <div class="box-content">
            <p class="box-text">
            ¿Tienes algo que decirnos? ¿Una propuesta, una petición, una queja?
            Este es el lugar adecuado, rellena el
            siguiente formulario y contactaremos contigo lo antes posible.
            </p>
            <p class="box-text">
                Antes de enviar tu duda, asegúrate que no esté resuelta en nuestra sección de
                <a href="momazosPreguntas" target="_blank" title="Preguntas frecuentes">preguntas frecuentes</a>.
            </p>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-md-right">Nombre</div>
                <div class="col-md-6 col-sm-12 text-md-left"><input type="text" id="nombre" placeholder="Nombre"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 text-md-right">Email  </div>
                <div class="col-md-6 col-sm-12 text-md-left"><input type="text" id="email" placeholder="email (opcional)"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 text-md-right">Asunto  </div>
                <div class="col-md-6 col-sm-12 text-md-left">
                    <select id="contact-topic" name="topic" class="form-input field-validate" data-validations="required">
                        <option value="">Escoge</option>
                        <option value="Colaboración">Colaboración</option>
                        <option value="Comportamiento inadecuado">Comportamiento inadecuado</option>
                        <option value="Duda">Duda</option>
                        <option value="Felicitación">Felicitación</option>
                        <option value="Petición">Petición</option>
                        <option value="Propuesta">Propuesta</option>
                        <option value="Publicidad">Publicidad</option>
                        <option value="Red de blogs">Red de blogs</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 text-md-right">Comentarios</div>
                <div class="col-md-6 col-sm-12 text-md-left">
                    <textarea name="message" placeholder="Comentarios" rows="10" cols="30"></textarea> 
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-sm-12 text-md-center"><input type="submit" name="enviar" value="Enviar" class="btn btn-primary"/></div>
            </div>
        </form>
        <hr class="col-4"><br>
        <div class="row text-center">
            <div class="col-md col-sm-6">
                <a href="https://www.twitch.tv/linustech"><i class="fa fa-twitch" style="font-size:50px;color:purple"></i></a>
                <p class="col-md-12">Twitch</p>
            </div>
            <div class="col-md col-sm-6">
                <a href="https://www.facebook.com/LinusTech"><i class="fa fa-facebook-square" style="font-size:50px;color:blue"></i></a>
                <p class="col-md-12">Facebook</p>
            </div>
            <div class="col-md col-sm-6">
                <a href="https://github.com/psp-97/proyectoDIW.git"><i class="fa fa-git-square" style="font-size:50px;color:burlywood"></i></a>
                <p class="col-md-12">GitHub</p>
            </div>
            <div class="col-md col-sm-6">
                <a href="https://www.instagram.com/linustech/"><i class="fa fa-instagram" style="font-size:50px;color:purple"></i></a>
                <p class="col-md-12">Instagram</p>
            </div>
            <div class="col-md col-sm-6">
                <a href="https://twitter.com/LinusTech"><i class="fa fa-twitter-square" style="font-size:50px;color:cyan"></i></a>
                <p class="col-md-12">Twiter</p>
            </div>
            <div class="col-md col-sm-6">
                <a href="https://www.youtube.com/user/LinusTechTips/videos"><i class="fa fa-youtube-play" style="font-size:48px;color:red"></i></a>
                <p class="col-md-12">Youtube</p>
            </div>
        </div>
    </div>
</div>
<div class="footer text-center">
    <p>&copy; <?php print date("Y");?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
</body>
</html>