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
	
	<title>View Article</title>
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
  			<span class="strongFont">View </span> <span class="lightFont">article</span>
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

	<div class="spacer">Hello</div> <!-- spacer -->

	<?php
	
	
	$id=$_GET["id"];
	
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="SELECT * FROM tbtable WHERE postid='$id'";

	$result=mysql_query($query);

	$row=mysql_fetch_array($result);
	
		$post_id=$row["postid"];
		$post_title=$row["postTitle"];
		$post_by=$row["postedBy"];
		$post_date=$row["postdate"];
		$post_picture=$row["picture"];
		$post_description=$row["description"];
		
	
?> <!-- php connection and retrieval-->

	
	
	<div class="col-sm-8" style="font-weight: 300; text-align: left; font-size: 50px">
	<?php echo $post_title; ?>
	</div> <!--post title -->
			
	<div class="col-sm-4" style="text-align: right; font-size: 20px; padding-top: 25px;">
	
    <li><span class="fa fa-pencil" style="text-align: right; text-decoration: none; color:#0199d9;  padding: 0px 10px 0px 10px;"></span><a href="editArticle.php?id=<?php echo $post_id; ?>">
    <span style="text-decoration: none; color:#0199d9; text-align: right;font-size: 19px; padding-bottom: 2px; padding-right: 10px;" >Edit this article</span>
    </a>
    </li>
    
    <li><span class="fa fa-trash" style="text-align: right; text-decoration: none; color:#0199d9;  padding: 0px 12px 0px 12px;"></span><a href="deleteArticle.php?id=<?php echo $post_id; ?>">
    <span style="text-decoration: none; color:#0199d9; text-align: right;font-size: 19px; padding-bottom: 2px; padding-right: 10px;" >Delete this article</span>
    </a>
    </li>
	
	</div> <!--edit and delete article -->	
	<!-- post title and edit and delete options -->			
	
	<div class="spacer">Hello</div> <!-- spacer -->
	
	<div class="col-sm-4" style="text-align: left; font-size: 18px;">
	<span class="strongerFont">Posted by: </span> <span class="moderateFont"><?php echo $post_by; ?> </span>
	</div>
	<div class="col-sm-8" style="text-align: right; font-size: 18px;">
	<span class="strongerFont">Posted on: </span> <span class="moderateFont"><?php echo $post_date; ?> </span>
	</div>
	<!-- posted by and posted on -->
	
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	<div class="col-sm-12">
	<img src="../images/<?php echo $post_picture; ?>" alt="Picture not found" style=" width: 100%; height: 600px; background-repeat: no-repeat; background-size: contain; border: 2px solid white;"> 
	</div>
	<!-- post picture -->
	
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	<div class="col-sm-12" style="text-align: justify;"><?php echo nl2br($post_description); ?>&nbsp;<a href="includes/descPage.php?id=<?php echo $post_id; ?>"></a></div>
	<!-- post description -->
	
	<div class="spacer">Hello</div> 
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	<div class="col-sm-12" style="border-bottom: 2px solid #0077AA; min-width: 100%;  max-width: 100%;"></div>
	<!-- bottom border -->
	
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
</div>

</div>
</div>

<div class="spacer">Hello,World!</div>

<?php include("footer.php") ?>

<div class="spacer">Hello,World!</div>



</body>
</html
