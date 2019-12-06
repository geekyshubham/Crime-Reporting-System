<html>
<body>
<?php
include_once("config.php");
$result= $mysqli->query("SELECT distinct division FROM district_info ");


echo "<select id='s1' onchange='dist()' onfocus='dist()'>";


while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->division;
		echo "</option>";
		
			
	}
	echo "</select>";
	
	echo "<select id='s2' onfocus='area()' onchange='area()'>";
	echo "</select>";
	echo "<select id='s3' >";
	echo "</select>";
	echo "</br>";
	echo "</br>";
	echo "<textarea rows='4' cols='50' id='ar'>";
	echo "</textarea>";
	
echo "<button id='b1' onclick='reported()'>"."Report"."</button>";

?>
</body>	
	
</html>