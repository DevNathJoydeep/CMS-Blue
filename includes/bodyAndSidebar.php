<div class="wow zoomIn">
<div class="bodyAndSidebar" style="text-align: left">

<!-- body section -->
<div class="col-sm-8" style=" border-right: 2px solid #0077AA;">

	<div class="spacer">Hello</div> <!-- spacer -->

	<?php
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="SELECT * FROM tbtable ORDER BY rand() LIMIT 0,5";

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

	
	
	<div class="col-sm-8" style="font-weight: 300; text-align: left; font-size: 50px">
	<?php echo $post_title; ?>
	</div> <!--post title -->
			
	<div class="col-sm-4" style="text-align: right; font-size: 20px; padding-top: 25px;">
	
    <li><span class="fa fa-pencil" style="text-align: right; text-decoration: none; color:#0199d9;  padding: 0px 10px 0px 10px;"></span><a href="includes/editArticle.php?id=<?php echo $post_id; ?>">
    <span style="text-decoration: none; color:#0199d9; text-align: right;font-size: 19px; padding-bottom: 2px; padding-right: 10px;" >Edit this article</span>
    </a>
    </li>
    
    <li><span class="fa fa-trash" style="text-align: right; text-decoration: none; color:#0199d9;  padding: 0px 12px 0px 12px;"></span><a href="includes/deleteArticle.php?id=<?php echo $post_id; ?>">
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
	<img src="../project/images/<?php echo $post_picture; ?>" alt="Picture not found" style=" width: 100%; height: 400px; background-repeat: no-repeat; background-size: contain; border: 2px solid white;"> 
	</div>
	<!-- post picture -->
	
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	<div class="col-sm-12" style="text-align: justify;"><?php echo substr(nl2br($post_description),0,200)."..."; ?>&nbsp;<a href="includes/descPage.php?id=<?php echo $post_id; ?>"><span class="readMore" style="color: #0199d9; background: white; border-radius: 5px; padding-left: 5px; padding-right: 5px; font-size: 16px;">Read More</span></a></div>
	<!-- post description -->
	
	<div class="spacer">Hello</div> 
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	<div class="col-sm-12" style="border-bottom: 2px solid #0077AA; min-width: 100%;  max-width: 100%;"></div>
	<!-- bottom border -->
	
	<div class="spacerLarge">Hello</div> <!-- spacer -->
	
	
	<?php } ?>

</div> <!--col-sm-8   body part ends here -->

<!-- sidebar section -->
<div class="col-sm-4">
This is the sidebar section


<!--
<label for="apple">Origin<p> </p></label>
<input class="input" type="text" name="apple" placeholder="placeholder"/>
<p> </p>
<input type="button" class="button" value="Submit" />  
-->


</div>

</div> <!--bosy and sidebar-->
</div> <!--wow-zoom-in-->