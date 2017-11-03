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
	
	<title>Post an Article</title>
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
  	<i class="fa fa-edit"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">Post</span> <span class="lightFont">an article</span>
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
<div class="bodyAndSidebar" style="text-align: left">
<div class="col-sm-12">

<!-- include enctype="multipart/form-data" when handling files -->
<form action="postAction.php" method="POST" enctype="multipart/form-data">
	<table>
	
		<tr>
			<label for="postTitle">Post Title:<p> </p></label>
			<input class="postInput" type="text" name="postTitle" placeholder="Post Title (max. 50 characters)"/>
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="postedBy">Posted By:<p> </p></label>
			<input class="postInput" type="text" name="postedBy" value="<?php echo $_SESSION["name"]; ?>" readonly="true"/>
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="picture">Picture:<p> </p></label>
			<input class="postInput" type="file" name="picture" id="picture" accept="image/gif, image/jpeg, image/png">
			<div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<label for="description">Description:<p> </p></label>
			<textarea class="postInput" name="description" placeholder="Enter article description here" style="resize: vertical; min-height: 240px; max-height: 480px;"></textarea>
			<div class="spacer">Hello,World!</div><div class="spacer">Hello,World!</div>
		</tr>
		<tr>
			<a href="../index.php">
			<input type="button" class="fixedSizeButton" value="Cancel"/>
			</a>
			<input type="submit" class="fixedSizeButton" value="Post" style="float: right"/>	
	    </tr>
		  
	</table>
</form>

</div>
</div>
</div>

<div class="spacer">Hello,World!</div>

<?php include("footer.php") ?>

<div class="spacer">Hello,World!</div>

</div>
</div>

</body>
</html>