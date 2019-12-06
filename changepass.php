<html>
	
	<head></head>
	<body>
	<table style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
			<tr style="width: 100%;border-collapse: collapse;border: 1px solid black;padding: 5px;">
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="home.php"><b>Home</b></a></th>
				
				<th style="border-collapse: collapse;border: 1px solid black;padding: 5px;"><a href="index.php"><b>Logout</b></a></th>
				
			</tr>
		</table>
	Enter old password <input type="password" id="ps" onblur="check()">
	<span id="s1">
	</span>
	</br>
	</br>

	Enter new password <input type="password" id="ns" >
	</br>
	</br>
		<button id="bt" onclick="changepass()">Submit</button>
			<span id="s2">
	</span>
	</body>
	<script>
		function check()
		{
				
				var str=document.getElementById("ps").value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("s1").innerHTML = this.responseText;
            }
        };
		
        xmlhttp.open("GET","passcheck.php?q="+str,true);
        xmlhttp.send();
    }
	function changepass()
		{
				
				var str=document.getElementById("ps").value;
				var str1=document.getElementById("ns").value;
				document.getElementById("ps").value="";
				document.getElementById("ns").value="";
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
		
        xmlhttp.open("GET","passchanged.php?q="+str+"&n="+str1,true);
        xmlhttp.send();
    }
	</script>
</html>