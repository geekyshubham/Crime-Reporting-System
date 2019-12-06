
<?php

include("config.php");

//getting id of the data from url
$name = $_GET['q'];

$value=explode(",",$name);
$area=$value[0];
$dist=$value[1];
$investigator=$value[2];
$mysqli->query("insert into area_info (name,district,investigator) values('$area','$dist','$investigator')");

?>