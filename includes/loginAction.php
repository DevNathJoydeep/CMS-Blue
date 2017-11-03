 <?php
		
ob_start();
session_start();

$u=$_POST["username"];
$p=$_POST["password"];

if($u=="admin")
{
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="select * from admin where username='$u'";

	$result=mysql_query($query);

	$row=mysql_fetch_array($result);

	$user=$row["username"];
	$pass=$row["password"];

	if($u==$user && $p==$pass)
  	{
		$_SESSION["valid"] = true;
    	$_SESSION["timeout"] = time();
    	$_SESSION["username"] = "admin";  
		$_SESSION["name"] = "Administrator"; //directly assigned. can also be pulled from DB
		$url = $_SESSION['url'];
		header("Location:../admin/adminPanel.php");; // perform correct redirect.
	}
	else
	{
		echo "Wrong password";
	}
}

else
{
	$con=mysql_connect("localhost","root","") or die("Unable to connect to server");
	$db=mysql_select_db("tbproject",$con) or die("Database not found");

	$query="select * from users where username='$u'";
	$getNameOfUser="select name from users where username='$u'";
		
	$result=mysql_query($query);
	$name=mysql_query($getNameOfUser);

	$row=mysql_fetch_array($result);
	$nameFromDB=mysql_fetch_array($name);
	
	$user=$row["username"];
	$pass=$row["password"];

	if($u==$user && $p==$pass)
  	{
		$_SESSION["valid"] = true;
    	$_SESSION["timeout"] = time();
    	$_SESSION["username"] = $u;
		$_SESSION["name"] = $nameFromDB[0];
		$url = $_SESSION['url'];
		header("Location:$url"); // perform correct redirect.
	}
	else
	{
		echo "Wrong password";
	}
}


?>