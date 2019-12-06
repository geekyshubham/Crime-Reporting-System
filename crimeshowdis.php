<?php
include_once("config.php");
$name = $_GET['q'];
$result= $mysqli->query("SELECT*  FROM area_info where district='$name'");
echo "<table width='100%' border=0 align='center'>

	<tr bgcolor='#CCCCCC'>
		<th>Reporter</th>
		<th>Crime Type</th>
		<th>Area</th>
		<th>Reporting Date</th>
		<th>Description</th>
		
		
		
		
	</tr>
	";
while($res = $result->fetch_object()) 
	{ 		
		$resul= $mysqli->query("SELECT*  FROM crime_info where area='$res->name'");
			while($re = $resul->fetch_object()) 
	{ 		
		echo "<tr>";
		echo "<td>".$re->reporter."</td>";
		echo "<td>".$re->crime_type."</td>";
		echo "<td>".$re->area."</td>";
		
		echo "<td>".$re->date;
		echo $re->month;
		echo $re->year."</td>";
		echo "<td>".$re->description."</td>";
		
	
		
		echo "</tr>";
			
		
			
	}
		
			
	}
	?>