<?php 
include_once("config.php");
$name = $_GET['q'];
$mysqli->query("UPDATE login_info SET type=3 WHERE username='$name'");

?>