<html>
	<head></head>
	<body style="background-color:green">
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
				
			</tr>
			</table>
	<table width='80%' border=0 align='center'>

	<tr bgcolor='#CCCCCC'>
		<th>Username</th>
		<th>email</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Contact</th>
		<th>Aprove</th>
		
	</tr>
	<?php 
	session_start();
if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
include_once("config.php");
$result= $mysqli->query("SELECT * FROM login_info where type=1 ");
	while($res = $result->fetch_object()) 
	{ 		$resul= $mysqli->query("SELECT * FROM user_info where username='$res->username' ");
			while($rs=$resul->fetch_object())
			{
				
				echo "<tr>";
		echo "<td>".$rs->username."</td>";
		echo "<td>".$rs->email."</td>";
		echo "<td>".$rs->age."</td>";
		echo "<td>".$rs->gender."</td>";
		echo "<td>".$rs->mobile."</td>";
		
		echo "<td><a href=\"blocked.php?id=$rs->username\">Block</a> </td>";	
		echo "</tr>";
				
			}	
	}
	?>
	</table>
	
	</body>
</html>