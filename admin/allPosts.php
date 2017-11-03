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
	
	<title>All Posts</title>
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
  	<i class="fa fa-list-alt"></i>
  		<i class="spacer"></i>
  			<span class="strongFont">All</span> <span class="lightFont">Posts</span>
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
			<th class="text-center" style="vertical-align: middle;">Id</th>
			<th class="text-center" style="vertical-align: middle;">Title</th>
			<th class="text-center" style="vertical-align: middle; width: 100px;">Posted By</th>
			<th class="text-center" style="vertical-align: middle;">Post Date</th>
			<th class="text-center" style="vertical-align: middle;">Post Picture</th>
			<th class="text-center" style="vertical-align: middle;">Post Description</th>
			<th class="text-center" style="vertical-align: middle;">Operation</th>
		</tr>
	</thead>	
	
	<?php
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="SELECT * FROM tbtable";

	$result=mysql_query($query);	
		
	while($row=mysql_fetch_array($result))
	{
		$post_id=$row["postid"];
		$post_title=$row["postTitle"];
		$post_by=$row["postedBy"];
		$post_date=$row["postdate"];
		$post_picture=$row["picture"];
		$post_description=$row["description"];
		
	
?> <!-- php connection and retrieval-->

		<!-- <tr style="border: 2px solid white; padding: 0px;"> -->
		<tbody>
		<tr>
			<td class="text-center" style="vertical-align: middle;"><?php echo $post_id; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><?php echo $post_title; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><?php echo $post_by; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><?php echo $post_date; ?></td>
			
			<td class="text-center" style="vertical-align: middle;"><img src="../images/<?php echo $post_picture; ?>" alt="Picture not found" style=" width: 200px; height: 125px; background-repeat: no-repeat; background-size: contain;"></td>
			
			<td class="text-center" style="vertical-align: middle; text-align:justify;"><?php echo nl2br($post_description); ?></td>
			
			<td class="text-center" style="vertical-align: middle;">
   			<a href="../includes/editArticle.php?id=<?php echo $post_id; ?>"><span class="fa fa-pencil" style="text-align: right; text-decoration: none; color:white; padding: 0px 5px 0px 5px;"></span></a>
			
   			<a href="../includes/deleteArticle.php?id=<?php echo $post_id; ?>"><span class="fa fa-trash" style="text-align: right; text-decoration: none; color:white; padding: 0px 5px 0px 5px;"></span>
    		</a>
			</td>
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