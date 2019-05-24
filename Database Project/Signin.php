<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesignin.css">
	<title>
		
	</title>
</head>
<body style="background-image: url('Book_login 4.jpg');">	
<div class="login-box" ">
  	<form action="http://localhost/xampp/Zincludes/signup.inc.php" method="POST">
  	<img src="avatar.png" class="avatar">
 	<p>Email Adress</p>
 	<input type="text" name="Email" placeholder=""  required="required" maxlength="60">
 	<p>User Id</p>
 	<input type="text" name="Userid" placeholder=""  required="required" maxlength="30" onkeyup="checkinput(this.value)">
 	<span id="txtHint"></span>
 	<p>Name</p>
 	<input type="text" name="name" placeholder=""  required="required" maxlength="30">
 	<p>Password:</p>
 	<input type="Password" name="Password" placeholder=""   required="required"  id="Password" maxlength="30">
 	<input type="submit" name="submit" value="Signup" >
	</form>
	<a href="Homepage 1.php" style="font-size: 25px;">Go back to Home Page</a>
</div>
	
<script type="text/javascript">
	/*function check(input)
	{
		//var val1,val2;
		//val1=document.getElementById("Password").value;
		//val2=document.getElementById("cPassword").value;
		if(input.value != document.getElementById("Password").value)
		{
			document.getElementById("warning").innerHTML = "Confirm Password not matched";
			input.setCustomValidity('Password not matched.');
		}
	}*/

	function checkinput(str) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "Background.php?q=" + str, false);
        xmlhttp.send();
    
    	}
</script>
</body>
</html>