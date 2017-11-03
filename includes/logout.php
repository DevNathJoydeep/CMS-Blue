<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION["name"]);
   
  /* $url = $_SESSION['url'];
   header("Location:$url"); */

	header("Location:../index.php");
?>