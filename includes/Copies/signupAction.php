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
	
	<title>Posting Result</title>
</head>
<body>

<?php

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
//$descFormatted = nl2br(htmlentities($desc, ENT_QUOTES, 'UTF-8'));
		
$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
$db=mysql_select_db("tbproject",$con) or die("Database not found");

$query="INSERT INTO users(name,username,password) VALUES('$name','$username', '$password')";

$result=mysql_query($query);

if($result)
{
	echo '<div class="container-fluid">';
	echo '<div class="spacer">Hello,World!</div>';
	echo '<div class="wow fadeInDown">';
	echo '<div class="header">';
	echo '<div class="col-sm-12">';
	echo '<p>';
  	echo '<i class="fa fa-check"></i>';
  	echo '<i class="spacer"> </i>';
  	echo '<span class="lightFont">Signup</span> <span class="strongFont">Successfull</span>';
	echo '</p>';
	echo '</div>'; //col-sm-12
	echo '</div>'; //header
	echo '<div class="spacer">Hello,World!</div>';
	echo '</div>'; //fadeInDown
	echo '<div class="wow zoomInDown">';
	echo '<div class="bodyAndSidebar" style="text-align: left">';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="col-sm-12" style="text-align: center;">';
	echo '<div class="heading3">You\'ve signed up successfully. You can now log in to access your account.</div>';
	echo '</div>';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="col-xs-12 text-center">';
	echo '<a href="../index.php" > <input type="button" class="button" value="Go to home page" /> </a>';	
	echo '</div>';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="spacer">Hello,World!</div>';
	echo '</div>'; //bodyAndSidebar
	echo '</div>';  //zoomInDown
	echo '<div class="spacer">Hello,World!</div>';
	include("footer.php");
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '</div>'; //container-fluid
}
else
{
	echo '<div class="container-fluid">';
	echo '<div class="spacer">Hello,World!</div>';
	echo '<div class="wow fadeInDown">';
	echo '<div class="header">';
	echo '<div class="col-sm-12">';
	echo '<p>';
  	echo '<i class="fa fa-close"></i>';
  	echo '<i class="spacer"> </i>';
  	echo '<span class="lightFont">Sign Up</span> <span class="strongFont">Unsuccessfull</span>';
	echo '</p>';
	echo '</div>'; //col-sm-12
	echo '</div>'; //header
	echo '<div class="spacer">Hello,World!</div>';
	echo '</div>'; //fadeInDown
	echo '<div class="wow zoomInDown">';
	echo '<div class="bodyAndSidebar" style="text-align: left">';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="col-sm-12" style="text-align: center;">';
	echo '<div class="heading3">Unable to sign you up</div>';
	echo '</div>';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="col-xs-12 text-center">';
	echo '<a href="signup.php" > <input type="button" class="button" value="Try again" /> </a>';	
	echo '</div>';
	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '<div class="spacer">Hello,World!</div>';
	echo '</div>'; //bodyAndSidebar
	echo '</div>';  //zoomInDown
	echo '<div class="spacer">Hello,World!</div>';
	include("footer.php");

	echo '<div class="spacerLarge">Hello,World!</div>';
	echo '</div>'; //container-fluid
}

?>

</div>

</body>
</html>