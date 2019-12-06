<html>
<body style="background-color:pink;"> 
<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
				
			</tr>
			</table>
			
			<center><h3 style="color:blue;">User Info</h3></center>
		
			

<?php 
	include_once("config.php");
	session_start();
if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
//fetching data in descending order (lastest entry first)

	
	
	echo "<table style='width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;'><tr style='width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;'>";
	echo "<th style='border: 1px solid black;'>"."Username"."</th>";
	echo "<th style='border: 1px solid black;'>"."Email"."</th>";
	echo "<th style='border: 1px solid black;'>"."Contact"."</th>";
	echo "<th style='border: 1px solid black;'>"."User Type"."</th></tr>";

	
	 	
		$resu= $mysqli->query("SELECT * FROM user_info  ");
		while($re = $resu->fetch_object())
		{   echo "<tr style='width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;'>";
			echo "<td style='border: 1px solid black;'>".$re->username."</td>";
			echo "<td style='border: 1px solid black;'>".$re->email."</td>";
			echo "<td style='border: 1px solid black;'>".$re->mobile."</td>";
			$result= $mysqli->query("SELECT * FROM login_info where username='$re->username' ");
			while($res = $result->fetch_object()) 
			{
				if($res->type==0)
					echo "<td style='border: 1px solid black;'>Unverified</td>";
				else if($res->type==1)
					echo "<td style='border: 1px solid black;'>verified</td>";
				else if($res->type==2)
					echo "<td style='border: 1px solid black;'>Admin</td>";
				if($res->type==3)
					echo "<td style='border: 1px solid black;'>Investigator</td>";
				
			}
			echo "</tr>";
		}
		
			
	
	echo "</table>";
	?>
	</body>
	</html>