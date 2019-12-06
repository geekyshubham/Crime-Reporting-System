<?php 
include_once("config.php");
session_start();
$name=$_SESSION["username"];
$result= $mysqli->query("SELECT * FROM login_info where username='$name'");
while($res = $result->fetch_object())
	{
		$type=$res->type;
		
	}
		
		if($type==0)
	    header('Location:nuser.php');
		else if($type==1)
			header('Location:user.php');
		else if($type==2)
			header('Location:admin.php');
		else if($type==3)
			header('Location:investigator.php');
	

?>