<?php include("checkLogin.php") ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/updateTimeDate.js"></script>
	<script src="../js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
	
	<title>Admin Panel</title>
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
  	<i class="fa fa-user-secret"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">Admin</span> <span class="lightFont">Panel</span>
	</p>
	</div>
	<div class="col-sm-4">
	</div>
</div>
</div>

<div class="spacer">Hello,World!</div>

<?php include("menuAdmin.php") ?>

<div class="spacer">Hello,World!</div>

<?php

	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$countUsers="SELECT COUNT(*) FROM users";
	$countUsersQuery=mysql_fetch_array(mysql_query($countUsers));

    $countPosts="SELECT COUNT(*) FROM tbtable";
	$countPostsQuery=mysql_fetch_array(mysql_query($countPosts));

?>

<div class="bodyAndSidebar" style="padding: 10px 0px;">
	
	
	<div class="col-sm-3">
		<div class="adminStatsHeading">System Date</div>
		<div class="spacer">Hello, World</div>
		<div class="adminStatsText" id="date" style="font-size: 40px;"></div>
	</div>
	
	<div class="col-sm-3">
		<div class="adminStatsHeading">System Time</div>
		<div class="spacer">Hello, World</div>
		<div class="adminStatsText" id="time" style="font-size: 40px;"></div>
	</div>
	
	<div class="col-sm-3">
		<div class="adminStatsHeading">No. of users</div>
		<div class="spacer">Hello, World</div>
		<div class="adminStatsText" style="font-size: 40px;"><?php echo $countUsersQuery[0]; ?></div>
	</div>
	
	<div class="col-sm-3">
		<div class="adminStatsHeading">No. of posts</div>
		<div class="spacer">Hello, World</div>
		<div class="adminStatsText" id="time" style="font-size: 40px;"><?php echo $countPostsQuery[0]; ?></div>
	</div>
	
</div>

<div class="spacer">Hello,World!</div>

<div class="wow zoomInDown">

	<div class="adminToolsRow1">

	<a href="../includes/post.php">
<div class="col-sm-3 text-center" style="padding-left: 0px;">
	<div class="adminOptions">
		<div class="spacerLarge">Creating some space</div>
		<div class="fa fa-edit" style="font-size:75px;"></div>
		<div class="spacer">Creating some space</div>
		<div class="adminOptionsText" style="font-size:30px;">Post Article</div>
		<div class="spacerLarge">Creating some space</div>
	</div>
</div>
</a>
	
	<a href="allPosts.php">
<div class="col-sm-3 text-center" style="padding-left: 2px; padding-right: 0px;">
	<div class="adminOptions">
		<div class="spacerLarge">Creating some space</div>
		<div class="fa fa-list-alt" style="font-size:75px;"></div>
		<div class="spacer">Creating some space</div>
		<div class="adminOptionsText" style="font-size:30px;">View Posts</div>
		<div class="spacerLarge">Creating some space</div>
	</div>
</div>
</a>
	
	<a href="searchPost.php">
<div class="col-sm-3 text-center" style="padding-left: 17px; padding-right: 2px;">
	<div class="adminOptions">
		<div class="spacerLarge">Creating some space</div>
		<div class="fa fa-search" style="font-size:75px;"></div>
		<div class="spacer">Creating some space</div>
		<div class="adminOptionsText" style="font-size:30px;">Search Post</div>
		<div class="spacerLarge">Creating some space</div>
	</div>
</div>
</a>
	
	<a href="allUsers.php">
<div class="col-sm-3 text-center" style="padding-right: 0px;">
	<div class="adminOptions">
		<div class="spacerLarge">Creating some space</div>
		<div class="fa fa-user" style="font-size:75px;"></div>
		<div class="spacer">Creating some space</div>
		<div class="adminOptionsText" style="font-size:30px;">View Users</div>
		<div class="spacerLarge">Creating some space</div>
	</div>
</div>
</a>
	
</div>

</div>
	
<div class="spacer">Hello,World!</div>
<?php include("../includes/footer.php") ?>
<div class="spacer">Hello,World!</div>
	
</div> <!-- container fluid -->
	
</body>
	
</html>
