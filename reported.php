
<?php
session_start();

include("config.php");
$reporter=$_SESSION["username"];
//getting id of the data from url
$type=$_GET['t'];
$area=$_GET['a'];
$des=$_GET['ds'];
$month=date('M');
$date=date('d');
$year=date('Y');
$value=explode(",",$name);

$mysqli->query("insert into crime_info (crime_type,area,reporter,date,month,year,status,description) values('$type','$area','$reporter','$date','$month','$year',0,'$des')");

?>