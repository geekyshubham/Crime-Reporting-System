<?php 
session_start();
include_once("config.php");
$id=$_GET['id'];



		$mysqli->query("UPDATE crime_info SET status='1' where id='$id'");
		header("Location:pending_report.php");
		
		
		


?>