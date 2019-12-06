<html>
<body>
<?php
include_once("config.php");
$result= $mysqli->query("SELECT distinct division FROM district_info ");
echo "<table ><tr> <th>Division</th>  <th>District</th> <th>Crimetype</th></tr>";
echo "<tr>";

echo "<td>"."<select id='dv' onchange='div()' onfocus='div()'>";


while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->division;
		echo "</option>";
		
			
	}
	echo "</select>"."</td>";
	
	echo "<td><select id='ds' onfocus='dis()' onchange='dis()'>";
	
	echo "</select></td>";
	echo "<td><select id='ct' onfocus='crt()' onchange='crt()'>";
	echo "<option>Fraud</option>
		<option>CyberCrime</option>
		<option>Robbery</option>
		<option>Rap</option>
		<option>Sexual Harresment</option>
		<option>Child Abuse</option>
		<option>Hijack</option>";
	echo "</select></td> </tr></table>";
	


?>
</body>	
	
</html>