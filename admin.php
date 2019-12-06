<html>
	<head></head>
	<?php
	session_start();
	include_once("config.php");
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
	?>
	<body style="background-color:yellow">
		<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="viewuser.php"><b>View User</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="aproveuser.php"><b>Aprove User</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="edituser.php"><b>Edit User</b></a></th>
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="logout.php"><b>Logout</b></a></th>
			</tr>
		</table>
		
		<center><button onclick="addarea()">Add new area</button>
		<a href="viewreport.php">View Report</a>
		</center>
		<div id="d2">
		</div>
		<div id="d1">
		</div>
	</body>
	<script>
		function addarea()
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
		
        xmlhttp.open("GET","addarea.php",true);
        xmlhttp.send();
    }
	function adddis()
		{
			var name=document.getElementById("ar").value;
			var dist=document.getElementById("s2").value;
				var investigator=document.getElementById("s3").value;
				var str=name+","+dist+","+investigator;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				if(name.length<1)
                document.getElementById("d1").innerHTML = "area has been added";
            }
        };
		
        xmlhttp.open("GET","insertarea.php?q="+str,true);
        xmlhttp.send();
    }
function dist()
	{    
		document.getElementById("ar").innerHTML="avsvstwtwttwtw";
		var str=document.getElementById("s1").value;
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
                document.getElementById("s2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","selectdist.php?q="+str,true);
        xmlhttp.send();
		
		
	}
	}
	function investigator()
	{    
		document.getElementById("ar").innerHTML="avsvstwtwttwtw";
		var str=document.getElementById("s1").value;
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
                document.getElementById("s3").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","selectinvestigator.php",true);
        xmlhttp.send();
		
		
	}
	}
			
		
	</script>
</html>