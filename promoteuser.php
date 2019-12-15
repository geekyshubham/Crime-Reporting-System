
<html>
<head>	
	<title>Homepage</title>
		
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.css'>
		<link rel='stylesheet' href='https://s.cdpn.io/43033/animate.min.css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
	
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

			<center><h3>Promote User</h3></center><br><br>
			<center>
				
<div id="a1">

</div>
	<table style="width: 30%;>
	<tr style="width: 30%;>
	<td>
	<?php 
	include_once("config.php");
	session_start();
if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
//fetching data in descending order (lastest entry first)
$result= $mysqli->query("SELECT * FROM login_info where type!=0 ");
	echo "<select id='un'>";
	
	while($res = $result->fetch_object()) 
	{ 		
		echo "<option>";
		echo $res->username;
		echo "</option>";
			
	}
	echo "</select>";
	?>
	</td>
	<td><button onclick="makeadmin()">Make admin</button></td>
	<td><button onclick="makeinvestigator()">Make investigator</button></td>
	</tr>
	</table>
</center>
</body>
<script>
	function makeadmin()
	{
		var str=document.getElementById("un").value;
		
   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rs").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","makeadmin.php?q="+str,true);
        xmlhttp.send();
	}
	
	function makeinvestigator()
	{
		var str=document.getElementById("un").value;
		
   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rs").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","makeinvestigator.php?q="+str,true);
        xmlhttp.send();
		
		
	}
</script>
</html>