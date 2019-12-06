<?php
include_once("config.php");
$name = $_GET['q'];
$result= $mysqli->query("SELECT*  FROM district_info where division='$name'");

while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->name;
		echo "</option>";
		
			
	}
	
?>