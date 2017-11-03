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
	
	<title>Edit an Article</title>
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
  	<i class="fa fa-pencil"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">Edit</span> <span class="lightFont">an article</span>
	</p>
	</div>
	<div class="col-sm-4">
	</div>
</div>
</div>

<div class="spacer">Hello,World!</div>

<div class="wow zoomInDown">
<div class="bodyAndSidebar" style="text-align: left">
<div class="col-sm-12">

<?php
	
	//$validSession=isset($_SESSION["username"]);
	$id=$_GET["id"];
	
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="SELECT * FROM tbtable WHERE postid='$id'";

	$result=mysql_query($query);

	$row=mysql_fetch_array($result);

		$post_title=$row["postTitle"];
		$post_by=$row["postedBy"];
		$post_date=$row["postdate"];
		$post_picture=$row["picture"];
		$post_description=$row["description"];
		$user=$row["username"];
		//$desc_Formatted=str_replace("\r\n","<br />",$post_description);
	
	if($user==$_SESSION["username"] or $_SESSION["username"]=="admin"):
	
?>

<form action="updateArticle.php" method="POST" enctype="multipart/form-data">
	
	
<table>
	
		<tr>
			<label for="postTitle">Post Title:<p> </p></label>
			<input class="postInput" type="text" name="postTitle" value="<?php echo $post_title; ?>"/>
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="postedBy">Posted By:<p> </p></label>
			<input class="postInput" type="text" name="postedBy" value="<?php echo $post_by; ?>"/>
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="picture">Picture:<p> </p></label>
			<input class="postInput" type="file" name="picture" id="picture" accept="image/gif, image/jpeg, image/png" value="<?php echo $post_picture; ?>"/>
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="description">Description:<p> </p></label>
			<textarea class="postInput" name="description" style="resize: vertical; min-height: 240px; max-height: 480px;"><?php echo str_replace("<br />","\r\n",$post_description); ?></textarea>
			
			
			<div class="spacer">Hello,World!</div><div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<a href="../index.php">
			<input type="button" class="fixedSizeButton" value="Cancel"/>
			</a>
			<input type="submit" class="fixedSizeButton" value="Update" style="float: right"/>	
	    </tr>
		  
	</table>	
	
	<tr align="center">
	<td> <div class="spacer">Hello</div> </td>
	</tr>
	
	<input type="hidden" name='h1' value="<?php echo $id; ?>">
	
	
	<?php 
	else:
	?>
		
		<div class="col-sm-12 text-center">
		
			<div class="spacerLarge">Hello World</div>
			Cannot edit this post. You can only edit posts that you've created.
			<div class="spacerLarge">Hello,World!</div>
			<div class="col-xs-12 text-center">
			<a href="../index.php" > <input type="button" class="button" value="Go back to Home" /> </a>
			</div>
			<div class="spacerLarge">Hello,World!</div>
		
		</div>
	
	<?php
	?>
	
	<?php endif; ?>
	
</div>
</div>
</div>
	
	<div class="spacer">Hello,World!</div>

<?php include("footer.php") ?>

<div class="spacer">Hello,World!</div>
	
	</div>