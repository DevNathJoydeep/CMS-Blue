<?php session_start();
	
if($_SESSION["username"]=="admin")
{
	
	$h1=$_GET["id"];

	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="DELETE FROM tbtable WHERE postid='$h1'";  //deleteing the data from the database
	$queryTwo="SELECT * FROM tbtable WHERE postid='$h1'";  //retrieving the name of the corresponding post picture from the database

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
}

else
{
	header("Location:blocked.php");
   	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
?>