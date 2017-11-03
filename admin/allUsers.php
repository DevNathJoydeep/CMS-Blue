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
	<script src="../js/jquery.floatThead.min.js"></script>
	<script src="../js/stick.js"></script>
	<script src="../js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
	
	<title>All Users</title>
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
  	<i class="fa fa-user"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">All</span> <span class="lightFont">Users</span>
	</p>
	</div>
	<div class="col-sm-4">
	</div>
</div>
</div> <!-- header -->

<div class="spacer">Hello,World!</div>

<?php include("menuAdmin.php") ?>

<div class="spacer">Hello,World!</div>

<div class="wow fadeIn">

<div class="bodyAndSidebar" style="font-size: 16px;">

<!-- body section -->
<div class="col-sm-12">

	<div class="spacer">Hello</div> <!-- spacer -->

	
	<!--<table border="2">-->

	<table class="table table-responsive table-hover sticky-header" style="border-bottom: 2px solid #0077AA;">
	<thead>
		<tr>
			<th class="text-center" style="vertical-align: middle;">User ID</th>
			<th class="text-center" style="vertical-align: middle;">Name</th>
			<th class="text-center" style="vertical-align: middle;">Username</th>
		</tr>
	</thead>	
	
	<?php
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="SELECT * FROM users";

	$result=mysql_query($query);	
		
	while($row=mysql_fetch_array($result))
	{
		$userid=$row["userid"];
		$name=$row["name"];
		$username=$row["username"];
	
?> <!-- php connection and retrieval-->

		<!-- <tr style="border: 2px solid white; padding: 0px;"> -->
		<tbody>
		<tr>
			<td class="text-center" style="vertical-align: middle;"><?php echo $userid; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><?php echo $name; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><?php echo $username; ?></td>
			
		</tr>
		</tbody>
	
	
	
	
	
	
		<?php } ?>
		
		
		<!-- CURRENT ENDS HERE -->
			
	</table>
	

</div> 
</div> <!--col-sm-12   body part ends here -->

</div> <!-- admin -->

<div class="spacer">Hello,World!</div>

<?php include("../includes/footer.php") ?>

<div class="spacer">Hello,World!</div>

</div><!-- container fluid-->

</body>
</html>