<?php 
session_start();
include_once("config.php");
$pass=$_GET['q'];
$name=$_SESSION["username"];
$result= $mysqli->query("SELECT*  FROM login_info where username='$name' and password='$pass'");


if(mysqli_num_rows($result) == 0)
{
	
	echo "Wrong old password";
	
}

?>