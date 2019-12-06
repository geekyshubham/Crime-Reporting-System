<?php
include_once("config.php");
$name = $_GET['q'];
$result= $mysqli->query("SELECT*  FROM login_info where type=3");

while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->username;
		echo "</option>";
		
			
	}
	
?>