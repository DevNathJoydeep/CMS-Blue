<?php session_start();
if(!isset($_SESSION["username"])){
   $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
	
	<title>About Us</title>
</head>
<body>

<div class="container-fluid">

<div class="spacer">Hello,World!</div>

<div class="wow fadeInDown">
<div class="header">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4">
	<p>
  	<i class="fa fa-file-text-o"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">About</span> <span class="lightFont">Us</span>
	</p>
	</div>
	<div class="col-sm-4">
	</div>
</div>
</div>

<div class="spacer">Hello,World!</div>

<?php include("menuIncludes.php") ?>

<div class="spacer">Hello,World!</div>

<div class="wow zoomInDown">
<div class="bodyAndSidebar">
<div class="col-sm-12" style="text-align: justify;">

	<div class="spacer">Hello,World!</div>
	
	<div class="aboutHeading">
		
		CMS Blue <sup>BETA</sup>
		
	</div>
	
	<div class="spacer">Hello,World!</div>
	<div class="spacer">Hello,World!</div>
	
	<div class="aboutDesc">
		
		CMS Blue is a Content Management System that allows users to post articles without having to learn HTML or any other markup language.
		
	</div>
	
	<div class="spacer">Hello,World!</div>
	<div class="spacer">Hello,World!</div>
	<div class="spacer">Hello,World!</div>
	
	<div class="aboutSocial text-center">
		
		<a href="http://joydeep.dx.am" target="_blank"><i class="fa fa-globe blue marg"></i></a>
		<a href="mailto:joydeep@joydeep.dx.am"><i class="fa fa-envelope blue marg"></i></a>
		<a href="https://www.behance.net/devnathjoydeep" target="_blank"><i class="fa fa-behance-square blue marg"></i></a>
		<a href="https://github.com/DigitalRevenge" target="_blank"><i class="fa fa-github-square blue marg"></i></a>
		<a href="https://stackoverflow.com/users/8312107/digital-revenge" target="_blank"><i class="fa fa-stack-overflow blue marg"></i></a>
		
	</div>
	
	<div class="spacerLarge">Hello,World!</div>

</div>
</div>	
</div>

<div class="spacer">Hello,World!</div>

<?php include("footer.php") ?>

<div class="spacer">Hello,World!</div>

</div>

</body>
</html>