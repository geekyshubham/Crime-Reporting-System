<html>
<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$name = $_GET['q'];

//deleting the row from table
//$result = mysql_query("DELETE FROM users WHERE id=$id");
$result= $mysqli->query("SELECT * FROM user_info where username='$name'");
	
	?>
	
			
			<?php 
	$x=0;
	while($res = $result->fetch_object()) 
	{ 		
		$x++;
			
	}
	if($x!=0)
		echo "Username already exist";
	
	?>
	
		</table>

</html>