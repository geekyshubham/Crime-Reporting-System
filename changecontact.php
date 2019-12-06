<html>
	
	<head></head>
	<body>
		<?php
		session_start();
		include_once("config.php");
		$name=$_SESSION["username"];
		
		$result= $mysqli->query("SELECT*  FROM user_info where username='$name'");
		while($res = $result->fetch_object()) 
		{
			$old=$res->mobile;
			
		}
		?>
		<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
		<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
	<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="index.php"><b>Logout</b></a></th>
				</tr>
				</table>
	Old Contact number <? echo $old;?>
		
	
	</br>
	</br>

	Enter new contact number <input type="text" id="nc" >
	</br>
	</br>
		<button id="bt" onclick="changecontact()">Submit</button>
			<span id="s2">
	</span>
	</body>
	<script>
		
	function changecontact()
		{
				
				var str=document.getElementById("nc").value;
				document.getElementById("nc").value="";
			
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("s2").innerHTML = this.responseText;
            }
        };
		
        xmlhttp.open("GET","contactchanged.php?q="+str,true);
        xmlhttp.send();
    }
	</script>
</html>