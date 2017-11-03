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
	
	<title>Log In</title>
</head>
<body>

<div class="container-fluid">

<div class="spacerLarge">Hello,World!</div>
<div class="spacerLarge">Hello,World!</div>

<div class="wow fadeInDown">

	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
	<div class="header">
	<p>
  	<i class="fa fa-lock"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">Log</span> <span class="lightFont">In</span>
	</p>
	</div>
	</div>
	<div class="col-sm-3">
	</div>
</div> <!-- heading -->

<div class="col-sm-12"><div class="spacer">Hello,World!</div></div>

<div class="spacer">Hello,World!</div>

<div class="wow zoomInDown">

<div class="col-sm-3"></div> <!-- left empty block -->

<div class="col-sm-6">

<div class="bodyAndSidebar" style="text-align: left">

<form action="loginAction.php" method="POST">

<label for="username" text-left>Username:<p> </p></label>
<input class="loginInput" type="text" name="username" placeholder="Username"/>
<p> </p>
<label for="password">Password:<p> </p></label>
<input class="loginInput" type="password" name="password" placeholder="Password"/>

<div class="spacer">Hello</div>
<div class="spacer">Hello</div>
<a href="../index.php">
	<input type="button" class="fixedSizeButton" value="Cancel"/>
</a>
<input type="submit" class="fixedSizeButton" value="Login" style="float: right"/>  

</form>

</div>


<!--
<label for="apple">Origin<p> </p></label>
<input class="input" type="text" name="apple" placeholder="placeholder"/>
<p> </p>
<input type="button" class="button" value="Submit" />  
-->

</div> <!-- login UI -->

<div class="col-sm-3"></div> <!-- right empty block -->
	
</div> <!-- login part -->

<div class="spacer">Hello,World!</div>


</div>

</body>
</html>