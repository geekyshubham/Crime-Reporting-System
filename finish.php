<?php 
session_start();
include_once("config.php");
$id=$_GET['id'];



		$mysqli->query("UPDATE crime_info SET status='2' where id='$id'");
		header("Location:processing_report.php");
		
		
		


?>