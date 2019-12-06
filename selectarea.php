<?php
include_once("config.php");
$name = $_GET['q'];
$result= $mysqli->query("SELECT*  FROM area_info where district='$name'");

while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->name;
		echo "</option>";
		
			
	}
	
?>