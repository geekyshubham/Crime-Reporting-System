<html>
<head>
</head>
<body style="background-color:cyan">
<?php
session_start();

include_once("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$un=$_POST["username"];
	$ps=$_POST["password"];
$result= $mysqli->query("SELECT * FROM login_info where username='$un' and password='$ps' ");


if(mysqli_num_rows($result) == 1)

{
	while($res = $result->fetch_object())
	{
		$type=$res->type;
		
	}
		$_SESSION['username']=$_POST['username'];
		if($type==0)
		{
			
			header('Location:nuser.php');
			$_SESSION["type"]="nuser";
		}
	    
		else if($type==1)
		{
			header('Location:user.php');
			$_SESSION["type"]="user";
			
		}
		else if($type==2)
		{
			header('Location:admin.php');
			$_SESSION["type"]="admin";
			
		}
		else if($type==3)
		{
			header('Location:investigator.php');
			$_SESSION["type"]="investigator";
		}
	else if($type==5)
		{
			header('Location:blockhome.php');
			$_SESSION["type"]="investigator";
		}
		  
		
		
	}
	else
		$error="invalid username or password";
		
}
?>
<center>
	<h2>Welcome to Crime Report Management</h2>
<form name="login" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
		Username&nbsp;<input type="text" name="username">
	     <br/>
		 <br/>
		
		 
		 password&nbsp;<input type="password" name="password">
		  </center>
			<center>
		<?php
		 if(isset($error))
			 echo $error;
		 ?>
		 <br/>
		 <br/>
		 </center>
		 <center>
		 <input type="submit">
	</form>
	<br/>
		 <br/>
	Dont have an account?
	<a href="signup.php"><h3>Sign up</h3></a>
	<a href="anonymous.php"><h3>Quick Report</h3></a>
	</center>
	</body>
</html>	