<?php session_start();
/*if(!isset($_SESSION["username"]))
{
    	header("Location:../includes/login.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}*/

if($_SESSION["username"]=="admin")
{
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}

else
{
	header("Location:blocked.php");
   	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
?>


