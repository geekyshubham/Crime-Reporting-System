<html>
	<head></head>
	<body style="background-color:orange">
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
				
			</tr>
			</table>
			<center><h3 style="color:green;">Aprove User</h3></center>
	<table width='80%' border=0 align='center' style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">

	<tr bgcolor='#CCCCCC' >
		<th style="border-collapse: collapse;border: 1px solid black;text-align:center; ">Username</th>
		<th style="border-collapse: collapse;border: 1px solid black; text-align:center">email</th>
		<th style="border-collapse: collapse;border: 1px solid black; text-align:center">Age</th>
		<th style="border-collapse: collapse;border: 1px solid black;text-align:center">Gender</th>
		<th style="border-collapse: collapse;border: 1px solid black;text-align:center">Contact</th>
		<th style="border-collapse: collapse;border: 1px solid black;text-align:center">Aprove</th>
		
	</tr>
	<?php 
	session_start();
if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
include_once("config.php");
$result= $mysqli->query("SELECT * FROM login_info where type=0 ");
	while($res = $result->fetch_object()) 
	{ 		$resul= $mysqli->query("SELECT * FROM user_info where username='$res->username' ");
			while($rs=$resul->fetch_object())
			{
				
				echo "<tr>";
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'>".$rs->username."</td>";
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'>".$rs->email."</td>";
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'>".$rs->age."</td>";
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'>".$rs->gender."</td>";
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'>".$rs->mobile."</td>";
		
		echo "<td style='border-collapse: collapse;border: 1px solid black;text-align:center'><a href=\"aproved.php?id=$rs->username\">Aprove</a> </td>";	
		echo "</tr>";
				
			}	
	}
	?>
	</table>
	
	</body>
</html>