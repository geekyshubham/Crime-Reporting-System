<html>
	<head>
		<title>Edit User</title>
	</head>
	<body>
	<?
	session_start();
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
	?>
		<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="admin.php"><b>Home</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="promoteuser.php"><b>Promote User</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="blockuser.php"><b>Block User</b></a></th>
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="blockusers.php"><b>UnBlock User</b></a></th>
				
			</tr>
	</body>
</html>