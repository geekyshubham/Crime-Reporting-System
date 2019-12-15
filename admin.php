    <html>
<head><style>





.btn {
  position: relative;
  display: inline-block;
  width: 166px;
  height: 45px;
  font-size: 12px;
  line-height: 45px;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  cursor: pointer;
  overflow: hidden;
}

.btn svg {
  position: absolute;
  top: 0;
  left: 0;
}

.btn svg rect {
  fill: none;
  stroke: #fff;
  stroke-width: 1;
  stroke-dasharray: 422, 0;
  -webkit-transition: all 1300ms cubic-bezier(0.19, 1, 0.22, 1);
  -moz-transition: all 1300ms cubic-bezier(0.19, 1, 0.22, 1);
  transition: all 1300ms cubic-bezier(0.19, 1, 0.22, 1);
}

.btn:hover svg rect {
  stroke-width: 5;
  stroke-dasharray: 10, 310;
  stroke-dashoffset: 33;
}

.btn:hover {
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: bold;
}
</style>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<?php
	session_start();
	include_once("config.php");
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
	?>
	<body ><nav>
  <ul>
    <li>
	<a href="viewuser.php"><b>View User</b></a>
    </li>
    <li>
	<a href="aproveuser.php"><b>Aprove User</b></a>
    </li>
    <li>
    <a href="edituser.php"><b>Edit User</b></a>
    </li>
    <li>
	<a href="logout.php"><b>Logout</b></a>
    </li>
  </ul>
</nav>

<script>var el = document.getElementById('foo');
el.onclick = addarea;



  return false;
}
    </script>

<CENTER>
<!--
<a href="#" onclick="addarea(); return false;">  <div id="foo" class="btn">
  <svg>
    <rect x="0" y="0" fill="none" width="166" height="45"/>
  </svg>
 ADD AREA
</div></a>		-->
		
      
      
        <a href='viewreport.php'>  <div class="btn" onclick="viewreport.php">
  <svg>
    <rect x="0" y="0" fill="none" width="166" height="45"/>
  </svg>
 VIEW REPORT
</div></a>

        </center>
        <br> <br>
        <center>
		<div id="d2">
		</div>
		<div id="d1">
        </div>
        <center>
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