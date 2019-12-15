<html>
<head>
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.css'>
		<link rel='stylesheet' href='https://s.cdpn.io/43033/animate.min.css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
	
	<STYLE>
		section {
	  width: 80%;
	  margin: 0 auto;
	  position: relative;
	  border-right: 2px dashed #ddd;
	  border-left: 2px dashed #ddd;
	}
	
	table {
	  width: 100%;
	  text-align: center;
	  min-width: 700px;
	 background: rgba(255, 255, 255, 0.66);
	}
	
	th, td {
	  width: 10%;
	  padding: 10px 0;
	}
	
	th {
	  color: #FFF;
	}
	
	tr {
	  border-top: 4px solid #fff;
	  background: #F1F1F0;
	}
	tr:nth-child(even) {
	  background: #f9f9f9;
	}
	thead tr {
	  background: #aaa;
	}
	
	
	
	@media only screen and (max-width: 700px) {
	  section:after {
		content: '';
		position: absolute;
		z-index: 10;
		top: 0;
		bottom: 0;
		right: 0;
		width: 10%;
		background: -webkit-linear-gradient(left, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -moz-linear-gradient(left, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -ms-linear-gradient(left, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -o-linear-gradient(left, transparent 10%, rgba(0, 0, 0, 0.2));
		background: linear-gradient(to right, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 0.2));
	  }
	
	  section:before {
		content: '';
		position: absolute;
		z-index: 10;
		top: 0;
		bottom: 0;
		left: 0;
		width: 10%;
		background: -webkit-linear-gradient(right, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -moz-linear-gradient(right, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -ms-linear-gradient(right, transparent 10%, rgba(0, 0, 0, 0.2));
		background: -o-linear-gradient(right, transparent 10%, rgba(0, 0, 0, 0.2));
		background: linear-gradient(to left, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 0.2));
	  }
	}
		</STYLE>
	</head>
<body>
<nav>
  <ul>
    <li>
	<a href="home.php"><b>Home</b></a>
    </li>
    <li>
	<a href="logout.php"><b>Logout</b></a>
    </li>
  </ul>
</nav>

	<table width='80%' border=0 align='center'>
	<thead>
	<tr >
		<th>Username</th>
		<th>email</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Contact</th>
		<th>Aprove</th>
		
	</tr>
</thead>
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