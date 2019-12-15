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
	<?php 
	session_start();
	include_once("config.php");
	$name=$_SESSION["username"];
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="user"))
		header('Location:index.php');
	$result= $mysqli->query("SELECT*  FROM crime_info where reporter='$name'");
	
	?>
   <nav>
  <ul>
    <li>
	<a href="user.php"><b>Home</b></a>
    </li>
    <li>
	<a href="index.php"><b>Logout</b></a>
    </li>
  </ul>
</nav>

		
<section>
<div>
<table>
  <thead>
  	<tr>
	  <th>Crime Type</th>
				<th >Report Date</th>
				<th >Description</th>
				<th >Status</th>
		</tr>
	</thead>
	<tbody>
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
	</tbody>
</table>
</div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>