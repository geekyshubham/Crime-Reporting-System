<html>
	<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.css'>
    <link rel='stylesheet' href='https://s.cdpn.io/43033/animate.min.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>

.card {
  display: flexbox;
  overflow: hidden;
  position: relative;
  background-color: rgba(255, 255, 255, 0.66); 
  height: 350px;
  width: 80%;
  margin: 20px;
  border-radius: 25px;
}

.card .header {
  position: absolute;
  bottom: 20px;
  padding: 20px;
}

.wrap {
  max-width: 60rem;
  margin: 0 auto;
}
    </style>
    </head>
	<?php
	session_start();
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="user"))
		header('Location:index.php');
	?>
	<body >
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

<CENTER><div class="wrap">
  
    <div class="card">
      <br>
    <h3> Report Crime </h3>
		<form>
		Crime Type : 
		<select id="ct" onchange="addarea()" onfocus="addarea()">
		<option>Fraud</option>
		<option>CyberCrime</option>
		<option>Robbery</option>
	
		<option>Hijack</option>
		</select>
		</br>
		Area  
		
		
		</form>
			<div id="d1">
            </div>
        </div>
 
</div></CENTER>
            
            
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js'></script>
<script  src="./assets/js/script.js"></script>
</html>