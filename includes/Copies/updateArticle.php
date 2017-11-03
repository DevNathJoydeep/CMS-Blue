<?php session_start();
	
if($_SESSION["username"]=="admin")
{
	
	$pTitle=$_POST["postTitle"];
	$pBy=$_POST["postedBy"];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('l jS \of F Y \a\t h:i:s A');
	$pic_name=$_FILES["picture"]["name"];
	$pic_type=$_FILES["picture"]["type"];
	$pic_size=$_FILES["picture"]["size"];
	$pic_tmp=$_FILES["picture"]["tmp_name"];
	$desc=$_POST["description"];
	$h1=$_POST["h1"];

	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	move_uploaded_file($pic_tmp,"../images/$pic_name");

	$query="UPDATE tbtable SET postTitle='$pTitle', postedBy='$pBy', postdate='$date', picture='$pic_name', description='$desc' WHERE postid='$h1'";

	$result=mysql_query($query);

	if($result)
	{
		header("location:../index.php");
	}
	else
	{
		echo "Unable to update";
	}

	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}

else
{
	header("Location:blocked.php");
   	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
} /*admin part*/


if($_SESSION["username"]=="admin")
{
	
	$pTitle=$_POST["postTitle"];
	$pBy=$_POST["postedBy"];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('l jS \of F Y \a\t h:i:s A');
	$pic_name=$_FILES["picture"]["name"];
	$pic_type=$_FILES["picture"]["type"];
	$pic_size=$_FILES["picture"]["size"];
	$pic_tmp=$_FILES["picture"]["tmp_name"];
	$desc=$_POST["description"];
	$h1=$_POST["h1"];

	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	move_uploaded_file($pic_tmp,"../images/$pic_name");

	$query="UPDATE tbtable SET postTitle='$pTitle', postedBy='$pBy', postdate='$date', picture='$pic_name', description='$desc' WHERE postid='$h1'";

	$result=mysql_query($query);

	if($result)
	{
		header("location:../index.php");
	}
	else
	{
		echo "Unable to update";
	}

	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}

else
{
	header("Location:blocked.php");
   	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}

?>
	
		
</body>
</html>