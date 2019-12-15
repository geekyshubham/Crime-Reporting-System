<html>
<head>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
		
	<body>
	
	<?php
	session_start();
	include_once("config.php");
	$name=$_SESSION["username"];
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="investigator"))
		header('Location:index.php');
	$resul= $mysqli->query("SELECT*  FROM area_info where investigator='$name'");
	$pending=0;
	$processing=0;
	$finished=0;
	$canceled=0;
	$total=0;
	
	while($re = $resul->fetch_object())
		
		{		$area=$re->name;
				
			  $result= $mysqli->query("SELECT*  FROM crime_info where area='$area'");
					while($res = $result->fetch_object()) 
	{ 		
	$total++;
	if($res->status==0)
			$pending++;
		else if($res->status==1)
			$processing++;
		else if($res->status==2)
			$finished++;
		else if($res->status==3)
			$canceled++;
			
	}
			
			
		}
	?>
	
	
		<nav>
  <ul>
    <li>
	<a href="processing_report.php"><b>Processing Reports</b></a>
	</li>
	<li>
	<a href="pending_report.php"><b>Pending Reports</b></a>
	</li>
	<li>
	<a href="finished_report.php"><b>Finished Reports</b></a>
	</li>
	<li>
	<a href="update_profile.php"><b>Update Profile</b></a>
	</li>
	
  </ul>
</nav>


		<section id="statistic" class="statistic-section one-page-section">
        <div class="container text-center">
            <div class="row text-center">


                <div class="col-xs-12 col-md-2">
                    <div class="counter">
                        <i class="fa fa-coffee fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number"><?php echo $total?> </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Total submitted reports</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2">
                    <div class="counter">
                        <i class="fa fa-code fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number"><?php echo $pending?>
                        </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Number of reports pending</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-clock-o fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number"><?php echo $processing?> </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Number of report under processing</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2">
                    <div class="counter">
                        <i class="fa fa-laptop fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number"><?php echo $finished?> </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Number of report finished </p>
                    </div>
				</div>
				<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-laptop fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number"><?php echo $canceled?> </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Number of reports cancelled </p>
					</div>
                </div>
					
					
                </div>
            </div>
        
    </section>
	<nav><ul>
<li>
	<a href="index.php"><b>Logout</b></a>
    </li></ul></nav>
	</body>
	
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js'></script>
<script  src="./assets/js/script.js"></script>
	
</html>