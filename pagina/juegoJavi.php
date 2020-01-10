<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>
        body {
            width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center
        }

        #miCanvas {
            border: solid 1px;
        }
    </style>
</head>
<body>
<?php include("includes/navigation.php"); ?>
<div class="container">
    <div class="row">
        <div class="col text-center mt-2">
            <h2>3 EN RAYA (Francisco Javier Trujillo Muñoz)</h2>
            <canvas id="miCanvas"></canvas>
        </div>
    </div>
</div>
<script src="js/juegoJavi.js"></script>
<div class="footer text-center">
    <p>&copy; <?php print date("Y"); ?> <a href="https://iesmarquesdecomares.org/"> IES Marqués de Comares.</a></p>
</div>
</body>
</html>