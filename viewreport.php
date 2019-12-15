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
        background: #aaa;
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
	<body >
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
		<center><h3 >Crime Report</h3></center>
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
        <thead>
	<tr >
   
		<th>Reporter</th>
		<th>Crime Type</th>
		<th>Area</th>
		<th>Reporting Date</th>
		<th>Description</th>
		
		
		
		
	</tr>
    </thead>
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