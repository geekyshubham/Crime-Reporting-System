<html>
	<head></head>
	<?php
	session_start();
	include_once("config.php");
	$name=$_SESSION["username"];
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="user"))
		header('Location:index.php');
	$result= $mysqli->query("SELECT*  FROM crime_info where reporter='$name'");
	$pending=0;
	$processing=0;
	$finished=0;
	$canceled=0;
	$total=0;
		while($res = $result->fetch_object()) 
	{ 		
	$total=0;
	
	if($res->status==0)
			$pending++;
		else if($res->status==1)
			$processing++;
		else if($res->status==2)
			$finished++;
		else if($res->status==3)
			$canceled++;
			
	}
	?>
	<body style="background-color:yellow">
	
		<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="report.php"><b>Report crime</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="your_report.php"><b>Your Report</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="update_profile.php"><b>Update Profile</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Log Out</b></a></th>
				
			</tr>
		</table>
		<h4>Total submitted report  <?php echo $total?> </h4>
		<h4>Number of report pending <?php echo $pending?> </h4>
		<h4>Number of report under processing  <?php echo $processing?> </h4>
		<h4>Number of report has finished <?php echo $finished?> </h4>
		<h4>Number of report has cancelled <?php echo $canceled?> </h4>
		
	</body>
	
	
</html>