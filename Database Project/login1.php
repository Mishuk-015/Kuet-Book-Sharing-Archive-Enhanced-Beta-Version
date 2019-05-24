<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
	<title>
		
	</title>
</head>
<body style="background-image: url('Book_login 4.jpg');">

<div class="login-box">
  			<form action="http://localhost/xampp/Zincludes/login.inc.php" method="POST">
  			<img src="avatar.png" class="avatar">
 			<p>Email Adress</p>
 			<input type="text" name="Email" placeholder=""  required="required" maxlength="60">
 			<p>User Id</p>
 			<input type="text" name="Userid" placeholder=""  required="required" maxlength="30">
 			<p>Password</p>
 			<input type="Password" name="Password" placeholder=""  required="required"  id="Password" maxlength="30">
 			<input type="submit" value="Submit" >
			</form>
			<form action="http://localhost/xampp/Zincludes/logout.inc.php" method="POST">
				<button type="submit" name="submit" style="font-size: 25px;" >Logout</button>
				</form>
		<a href="Homepage 1.php" style="font-size: 25px;">Go back to Home Page</a><br>
			
</div>
	
<script type="text/javascript">
	
</script>
</body>
</html>