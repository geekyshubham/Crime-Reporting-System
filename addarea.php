<html>
<body>
<?php
include_once("config.php");
$result= $mysqli->query("SELECT distinct division FROM district_info ");
echo "<table ><tr> <th>Name of area</th> <th>Division</th> <th>District</th> <th>Investigator</th></tr>";
echo "<tr>";
echo "<td>"."<input type='text' id='ar'>"."</td>";
echo "<td>"."<select id='s1' onchange='dist()' onfocus='dist()'>";


while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->division;
		echo "</option>";
		
			
	}
	echo "</select>"."</td>";
	
	echo "<td><select id='s2' onfocus='investigator()' onchange='investigator()'>";
	echo "</select></td>";
	echo "<td><select id='s3' >";
	echo "</select></td> </tr></table>";
	
echo "<button id='b1' onclick='adddis()'>"."Add"."</button>";

?>
</body>	
	
</html>