<?php 
session_start();
include_once("config.php");
$contact=$_GET['q'];

$name=$_SESSION["username"];





	
	if(strlen($contact)<11)
		echo "Enter a valid contact number ";
	else
	{
		$mysqli->query("UPDATE user_info SET mobile='$contact' where username='$name'");
		echo "	Contact has successfully changed";
		
		
		
	}
	
	


?>