<html>
	<head></head>
	<?php
	session_start();
	$_SESSION["username"]="Anonymous";
	$_SESSION["type"]="Anonymous";
	?>
	<body style="background-color:yellow;">
		<center>
		<h3> Report Crime</h3>
		<form>
		Crime Type : 
		<select id="ct" onchange="addarea()" onfocus="addarea()">
		<option>Fraud</option>
		<option>CyberCrime</option>
		<option>Robbery</option>
		<option>Rap</option>
		<option>Sexual Harresment</option>
		<option>Child Abuse</option>
		<option>Hijack</option>
		</select>
		</br>
		Area  
		
		
		</form>
			<div id="d1">
			</div>
			</center>
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
		
        xmlhttp.open("GET","addiv.php",true);
        xmlhttp.send();
    }
	function reported()
		{
			var str=document.getElementById("ct").value;
			var are=document.getElementById("s3").value;
				var des=document.getElementById("ar").value;
			
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("d1").innerHTML = "Crime has been reported";
            }
        };
		
        xmlhttp.open("GET","reported.php?t="+str+"&a="+are+"&ds="+des,true);
        xmlhttp.send();
    }
	function dist()
	{    
		document.getElementById("ar").innerHTML="";
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
	function area()
	{    
		
		var str=document.getElementById("s2").value;
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
       xmlhttp.open("GET","selectarea.php?q="+str,true);
        xmlhttp.send();
		
		
	}
	}
	</script>

</html>