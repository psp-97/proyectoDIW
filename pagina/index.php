<?php
session_start();
if( isset($_POST['novedades'])){
    setcookie('novedades',"algo",time() + 2629800);
    header('Location:index.php');}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>

<?php include("includes/navigation.php"); ?>
<?php include("content.php"); ?>
</body>
</html>