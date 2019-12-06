<?php 
include_once("config.php");
$name = $_GET['q'];
$mysqli->query("UPDATE login_info SET type=2 WHERE username='$name'");

?>