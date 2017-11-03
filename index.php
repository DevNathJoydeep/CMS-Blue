<?php session_start();
if(!isset($_SESSION["username"])){
   $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
	
	<title>CMS Blue | Project by Joydeep Dev Nath</title>
</head>
<body>

<div class="container-fluid">

<div class="spacer">Hello,World!</div>

<?php include("includes/header.php") ?>

<div class="spacer">Hello,World!</div>

<?php include("includes/menu.php") ?>

<div class="spacer">Hello,World!</div>

<?php include("includes/banner.php") ?>
	
<div class="spacer">Hello,World!</div>

<?php include("includes/bodyAndSidebar.php") ?>

<div class="spacer">Hello,World!</div>

<?php include("includes/footer.php") ?>

<div class="spacer">Hello,World!</div>

</div>

</body>
</html>