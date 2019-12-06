<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crime Reporting System</title>
  <link rel="stylesheet" href="./login-style.css">

</head>
<body>

<video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
     <source src="./clip.mp4" type="video/mp4">
          Sorry, your browser does not support HTML5 video.
</video>
  <!--PHP STUFF-->
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
<!-- partial:index.partial.html -->


<div class="account-wrapper" >

  <div id="root" class="account-main">
    <!-- Login Menu -->
    <div class="login-wrapper hidden" id="loginRoot">
      <div class="login-header">
        <p> Login </p>
      </div>
      <div class="login-body">
          <form name="login" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="account-input">
          <div class="account-input-head">
            <p> Name </p>
          </div>
          <input type="text" name="username"  placeholder="Username" maxlength="25">
          </input>
        </div>

      <div class="account-input">
          <div class="account-input-head">
            <p> Password </p>
          </div>
          <input type="password" name="password"  placeholder="********" maxlength="25">
          </input>
          <?php
		 if(isset($error))
			 echo $error;
		 ?>
        </div>
    
    <div class="account-input-submit" >
          <input type="submit" >
          </input>
        </div>
    
    </form>

      </div>
    </div>

    <!-- Button Seperation Menu -->
    <div id="btnCreate" class="create-button create">
      <p id="btnText"><a href="signup.php"> + </a></p>
    </div>
    
    <!-- Create Menu -->
    <div class="create-wrapper hidden" id="createRoot">
      <div class="create-header">
        <p> Create Account </p>
      </div>
      <div class="create-body">
        
        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Name </p>
          </div>
          <input type="text" name="username" form="create" placeholder="Username" maxlength="25">
          </input>
        </div>
      
        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Email </p>
          </div>
          <input type="email" name="email" form="create" placeholder="user@user.com" maxlength="35">
          </input>
        </div>

        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Email </p>
          </div>
          <input type="email" name="email" form="create" placeholder="user@user.com" maxlength="35">
          </input>
        </div>

        <div class="account-input invert">
          <div class="account-input-head invert">
            <p> Email </p>
          </div>
          <input type="email" name="email" form="create" placeholder="user@user.com" maxlength="35">
          </input>
        </div>

        <div class="account-input invert" style="margin-bottom: 2.5px;">
          <div class="account-input-head invert">
            <p> Password </p>
          </div>
          <input type="password" name="password" form="create" placeholder="********" maxlength="25">
          </input>
        </div>

<div class="account-input invert" style="margin-bottom: 0px;">
          <input type="password" name="passwordCheck" form="create" placeholder="********" maxlength="25">
          </input>
        </div>

<div class="account-input-submit invert" >
          <input form="postForm" type="submit" value="Submit">
          </input>
        </div>

      </div>
    </div>
  </div>
</div>


<form style="display: none;" action="/php/login.php" method="post" id="loginForm" enctype="multipart/form-data">
</form>
<form style="display: none;" action="/php/create.php" method="post" id="createForm" enctype="multipart/form-data">
</form>
<!-- partial -->
  <script  src="./login-script.js"></script>

</body>
</html>