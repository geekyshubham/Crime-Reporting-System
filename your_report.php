<html>
<head></head>
<body>
	<?php 
	session_start();
	include_once("config.php");
	$name=$_SESSION["username"];
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="user"))
		header('Location:index.php');
	$result= $mysqli->query("SELECT*  FROM crime_info where reporter='$name'");
	
	?>
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="user.php"><b>Home</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="index.php"><b>Logout</b></a></th>
				
			</tr>
		</table>
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;">Crime Type</th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;">Report Date</th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;">Description</th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;">Status</th>
				
			</tr>
			<?php
			while($res = $result->fetch_object()) 
	{ 		echo "<tr style='width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;'>";
		echo "<td>".$res->crime_type."</td>";
		echo "<td>".$res->date;
		echo $res->month;
		echo $res->year."</td>";
		echo "<td>".$res->description."</td>";
		if($res->status==0)
		echo "<td>"."Pending"."</td>";
		else if($res->status==1)
		echo "<td>"."Processing"."</td>";
	else if($res->status==2)
		echo "<td>"."finished"."</td>";
	else if($res->status==3)
		echo "<td>"."Canceled"."</td>";
	
		echo "</tr>";
			
	}?>
		</table>
</body>
</html>