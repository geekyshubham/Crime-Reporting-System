<?php 
session_start();
include_once("config.php");
$pass=$_GET['q'];
$npass=$_GET['n'];
$name=$_SESSION["username"];
$result= $mysqli->query("SELECT*  FROM login_info where username='$name' and password='$pass'");


if(mysqli_num_rows($result) == 0)
{
	
	echo "Wrong old password";
	
}
else
{
	
	if(strlen($npass)<5)
		echo "Length of password must be atleast 5 ";
	else
	{
		$mysqli->query("UPDATE login_info SET password='$npass' where username='$name'");
		echo "Password has successfully changed";
		
		
		
	}
	
	
}

?>