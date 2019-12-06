<html>
	<head></head>
	<body style="background-color:green">
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
				
			</tr>
			</table>
			
		<center><h3>Crime Report</h3></center>
		<button onclick="filter()">Filter result</button>
		<div id="d1">
		</div>
	<?php 
	session_start();
if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
include_once("config.php")
	?>
		<div id="cd">
		<table width='100%' border=0 align='center'>

	<tr bgcolor='#CCCCCC'>
		<th>Reporter</th>
		<th>Crime Type</th>
		<th>Area</th>
		<th>Reporting Date</th>
		<th>Description</th>
		
		
		
		
	</tr>
	
	<?php
	
	
	
	
				
			  $result= $mysqli->query("SELECT*  FROM crime_info ");
					while($res = $result->fetch_object()) 
	{ 		
		echo "<tr>";
		echo "<td>".$res->reporter."</td>";
		echo "<td>".$res->crime_type."</td>";
		echo "<td>".$res->area."</td>";
		
		echo "<td>".$res->date;
		echo $res->month;
		echo $res->year."</td>";
		echo "<td>".$res->description."</td>";
		
	
		
		echo "</tr>";
			
	}
			
			
		
	
	?>
	</table>
	</div>
	

	
	</body>
	<script>
		function filter()
		{
		 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("d1").innerHTML = this.responseText;
            }
        };
		
        xmlhttp.open("GET","addfilter.php",true);
        xmlhttp.send();
			
			
		}
		function div()
		{
		// document.getElementById("ar").innerHTML="";
		var str=document.getElementById("dv").value;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ds").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","selectdist.php?q="+str,true);
        xmlhttp.send();
		
		
	}
			
			
		}
		function dis()
		{
		 document.getElementById("cd").innerHTML="";
		var str=document.getElementById("ds").value;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cd").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","crimeshowdis.php?q="+str,true);
        xmlhttp.send();
		
		
	}
			
			
		}
		function crt()
		{
		document.getElementById("cd").innerHTML="";
		var str=document.getElementById("ct").value;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cd").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","crimeshowtype.php?q="+str,true);
        xmlhttp.send();
		
		
	}
			
			
		}
	</script>
</html>