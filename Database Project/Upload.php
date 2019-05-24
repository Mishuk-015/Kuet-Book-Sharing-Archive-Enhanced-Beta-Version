<?php
	session_start();
?>
<html>
<head>
	<title>
		Upload Booklink;
	</title>
	<link rel="stylesheet" type="text/css" href="styleupload.css">
</head>
<body style="background-image: url('Book_login 3.jpg');">

<div class="login-box">
  	<form action="http://localhost/xampp/Zincludes/upload.inc.php" method="POST">
 	<p>Book Link</p>
 	<input type="text" name="Booklink" placeholder=""  required="required" maxlength="200">
 	<p>Book Name</p>
 	<input type="text" name="Bookname" placeholder=""  required="required" maxlength="100">
 	<p>User id</p>
 	<input type="text" name="Userid" placeholder="" required="required" maxlength="30">
 	<p>Password</p>
 	<input type="Password" name="Password" placeholder="" required="required" maxlength="30">
 	<input type="submit" value="Submit Link">
	</form>
	<a href="Homepage 1.php" style="font-size: 25px">Go back to Home Page</a>
	<?php
			if(isset($_SESSION['user_id']))
				{
					$userid = $_SESSION['user_id'];
					echo "<h1>You are logged in as $userid</h1>";
				}
	?>
</div>

</body>
</html>