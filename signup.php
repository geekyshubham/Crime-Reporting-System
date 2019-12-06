<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="./signup2.css">
<!--PHP SCRIPT -->
<?php
		session_start();
		include_once("config.php");

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{   
			
		
				
		
		
				if(strlen($_POST["fname"])<5)
					$ferror="Length of firstname should be at least 5 ";
				else
					$fok="";
				if(strlen($_POST["lname"])<5)
					$lerror="Length of lastname should be at least 5 ";
				else
					$lok="";
				$un=$_POST["uname"];
				$result= $mysqli->query("SELECT * FROM user_info where username='$un'");
			$r=0;
			if(strcmp($_POST["pass"],$_POST["rpass"])!=0)
				$pmr="Password doesnt match";
			else
			{
				if(strlen($_POST["pass"])>5)
			$pok="";
			else
				$pmr="Length of password must be at least 6";
			
			}
		while($res = $result->fetch_object())
			{
				$r++;
				
			}
			if($r>0)
				$uerror="Username allready exist";
			else
			{   if(strlen($un)<5)
					$uerror="Length of username should be at least 5 ";
				else
					
				$nok="";
				
			}
				
				
			}
			
			if(isset($fok)&&isset($lok)&&isset($nok)&&isset($pok))
			{
				
				$fn=$_POST["fname"];
		$ln=$_POST["lname"];
		$un=$_POST["uname"];
		$ps=$_POST["pass"];
		$em=$_POST["email"];
		$noi=$_POST["noi"];
		$mn=$_POST["numb"];
		$gnd=$_POST["gender"];
		$age=$_POST["age"];
		$mysqli->query("insert into user_info (first_name,last_name,username,email,age,institute,mobile,gender) values('$fn','$ln','$un','$em',$age,'$noi','$mn','$gnd')");
$mysqli->query("insert into login_info (username,password,type) values('$un','$ps',0)");

		header('Location:success.php');
				
			}

		?>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" name="reg" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <h3>Sign Up</h3>
    <h4>Crime Reporting System</h4>
  
    <fieldset>
    First name&nbsp;<input type="text" name="fname" id="fn" onblur="fnvalidate() >
        <span id="fnp"> <? if(isset($ferror)) echo $ferror;?> </span>
         <br><br>
         </fieldset>
         Last name&nbsp;<input type="text" name="lname" id="ln" onblur="lnvalidate()">
         <span id="lnp"> <? if(isset($lerror)) echo $lerror;?> </span>
        <br><br>
        Username&nbsp;<input type="text" name="uname" id="un" onblur="unvalidate()">
        <span id="unp" style="color: red;"> <? if(isset($uerror)) echo $uerror;?> </span>
        <br><br>
        Email&nbsp;<input type="email" name="email" id="em" onblur="emvalidate()">
        <span id="emp" style="color: red;"> <? if(isset($emerror)) echo $emerror;?> </span>
        <br><br>
		Age&nbsp;<input type="text" name="age" id="ag" onblur="emvalidate()">
        <span id="agp"></span>
        <br><br>
		
        Password&nbsp;
        <input type="password" name="pass" id="ps" onblur="emvalidate()"><br><br>
        <span id="psp"></span>
        
        Retype Password&nbsp;
        <input type="password" name="rpass" id="rps" onblur="emvalidate()">
        <span id="rsp"><? if(isset($pmr)) echo $pmr;?>   </span>
        <br><br>
        Gender:<br>
			Male: <input type="radio" name="gender" value="male">
			Female: <input type="radio" name="gender" value="female">
    
        <br>
		<br>
		
            Contact number &nbsp;<input type="text" name="numb">
		 <br>
		 <br>
  
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" value="submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright"></p>
  </form>
</div>
<!-- partial -->
  
</body>
<script>
	function fnvalidate()
	{ document.getElementById("fnp").innerHTML="";
		var str=document.getElementById("fn").value;
		if(str.length<5)
			document.getElementById("fnp").innerHTML="Length of firstname should be atleast 5";
		
		
	}
	function numvali()
	{ 
	document.getElementById("fnp").innerHTML="";
		var str=document.getElementById("numg").value;
		if(str.length<11)
			document.getElementById("nup").innerHTML="Invalid mobile number";
		
	}
	function lnvalidate()
	{ document.getElementById("lnp").innerHTML="";
		var str=document.getElementById("ln").value;
		if(str.length<5)
			document.getElementById("lnp").innerHTML="Length of lastname should be atleast 5";
		
		
	}
	function unvalidate() {
		document.getElementById("unp").innerHTML="";
		var str=document.getElementById("un").value;
		if(str.length<5)
			document.getElementById("unp").innerHTML="Length of username should be atleast 5";
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
                document.getElementById("unp").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","usercheck.php?q="+str,true);
        xmlhttp.send();
    }
}
	function emvalidate()
	{
		
		
		
		
		
	}
	</script>
</html>