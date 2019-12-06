
<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
				
			</tr>
			</table>
			<center><h3>Promote User</h3></center>
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