<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:../includes/login.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}

?>

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
	
	<title>Delete an Article</title>
</head>
<body>

<div class="container-fluid">

<div class="spacer">Hello,World!</div>
	
	
<div class="wow fadeInDown">
<div class="header">
<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
	<p>
  	<i class="fa fa-trash"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">Delete</span> <span class="lightFont">an article</span>
	</p>
	</div>
	<div class="col-sm-3">
	</div>
</div>
</div>

<div class="spacer">Hello,World!</div>

<div class="wow zoomInDown">

<div class="bodyAndSidebar">








<?php

	$id=$_GET["id"];
	
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$queryOne="SELECT * FROM tbtable WHERE postid='$id'";
	
	$resultOne=mysql_query($queryOne);
	$rowOne=mysql_fetch_array($resultOne);
	$user=$rowOne["username"];

	if($user==$_SESSION["username"] or $_SESSION["username"]=="admin"):	

		$query="DELETE FROM tbtable WHERE postid='$id'";  //deleteing the data from the database
		$queryTwo="SELECT * FROM tbtable WHERE postid='$id'";  //retrieving the name of the corresponding post picture from the database

		$row=mysql_fetch_array(mysql_query($queryTwo));
		$post_picture=$row["picture"];  //assigning the retrieved picture name to a variable

		$result=mysql_query($query);

		if($result)
		{
			unlink("../images/$post_picture"); //deleting the picture from the images folder
			header("location:../index.php");
		}
		else
		{
			echo "Unable to delete";
		}
	
		$_SESSION['url'] = $_SERVER['REQUEST_URI'];
	
	else:?>
	
			<div class="col-sm-12 text-center">
		
			<div class="spacerLarge">Hello World</div>
			Cannot delete this post. You can only delete posts that you've created.
			<div class="spacerLarge">Hello,World!</div>
			<div class="col-xs-12 text-center">
			<a href="../index.php" > <input type="button" class="button" value="Go back to Home" /> </a>
			</div>
			<div class="spacerLarge">Hello,World!</div>
		
		</div>
		
		
	<?php endif; ?>
	
	
	
	
	
	
	
	</div>
		
	<div class="spacer">Hello,World!</div>

	<?php include("footer.php") ?>

	<div class="spacer">Hello,World!</div>
	
	</div>
	</div>
	
	
	</body>
</html>