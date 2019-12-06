<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$us = $_GET['id'];

//deleting the row from table
//$result = mysql_query("DELETE FROM users WHERE id=$id");
$mysqli->query("UPDATE login_info SET type=1 where username='$us'");
//redirecting to the display page (index.php in our case)
header("Location:aproveuser.php");
?>