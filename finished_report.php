<html>
	<body>
	<?php
	session_start();
	include_once("config.php");
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="investigator"))
		header('Location:index.php');
	
	
	
	?>
		<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="index.php"><b>Logout</b></a></th>
				
			</tr>
		</table>
		<table width='100%' border=0 align='center'>

	<tr bgcolor='#CCCCCC'>
		<th>Reporter</th>
		<th>Crime Type</th>
		<th>Area</th>
		<th>Reporting Date</th>
		<th>Description</th>
		
		<th>Contact</th>
		
		
		
	</tr>
	<?php
	
	$name=$_SESSION["username"];
	$resul= $mysqli->query("SELECT*  FROM area_info where investigator='$name'");
	while($re = $resul->fetch_object())
		
		{		$area=$re->name;
				
			  $result= $mysqli->query("SELECT*  FROM crime_info where area='$area' and status='2'");
					while($res = $result->fetch_object()) 
	{ 		

		echo "<td>".$res->reporter."</td>";
		echo "<td>".$res->crime_type."</td>";
		echo "<td>".$res->area."</td>";
		
		echo "<td>".$res->date;
		echo $res->month;
		echo $res->year."</td>";
		echo "<td>".$res->description."</td>";

	if(strcmp($res->reporter,'Anonymous')!=0)
		{
			$results= $mysqli->query("SELECT*  FROM user_info where  username='$res->reporter'");
				while($ress = $results->fetch_object()) 
				{
					echo "<td>".$ress->mobile."</td>";
				}
			
		}
		else
			echo "<td>Not Available</td>";
		
		echo "</tr>";
			
	}
			
			
		}
	
	?>
	</table>
	
	</body>
</html>	