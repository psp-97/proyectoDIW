<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>

<div class="container">



            <div class="row content" style="padding-top: 80px;">

                <a href="index.php">Volver</a>


                <div class="col-10 aside">
                    <a class="enlaceAMeme" href="meme.php">
                    <h3 class="aside-title">Meme de la semana</h3>
                    <img src="images/meme1.jpeg" alt="Sample Image" class="item-image" />
                    <p>Frankly, it's ludicrous to have these interlocking bodies and not...interlock.
                        My Uncle Rory was the stodgiesey! I wa me. If I could make you purtier, I would.</p>

                    </a>

                </div>


                <div class="col-10 aside">

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

                <div class="col-10 aside">

                    <p>&copy; <?php print date("Y");?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>

                </div>



    </div>

    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

</div>


</body>
</html>