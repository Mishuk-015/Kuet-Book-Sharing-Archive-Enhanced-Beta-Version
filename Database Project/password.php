<?php
	session_start();
	if(isset($_COOKIE['user_id'])){
		
                $_SESSION['user_id']=$_COOKIE['user_id'];
				$_SESSION['user_email']=$_COOKIE['user_email'];
				$_SESSION['user_name']=$_COOKIE['user_name'];
				$_SESSION['privilage']=$_COOKIE['privilage'];
		echo"
		<head>
		<title>
		Update Booklink;
		</title>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"styleupload.css\">
		</head>
		<body style=\"background-image: url('book_2.jpg')\">";
		echo"
		<div class=\"login-box\">
  		<form action=\"http://localhost/xampp/Zincludes/password.inc.php\" method=\"POST\">
 		<p>Password</p>
 		<input type=\"password\" name=\"password\" placeholder=\"\"  required=\"required\" maxlength=\"200\">
 		<p>New Password</p>
 		<input type=\"password\" name=\"npassword\" placeholder=\"\"  required=\"required\" maxlength=\"100\">
 		<p>User id</p>
 		<input type=\"text\" name=\"Userid\" placeholder=\"\" required=\"required\" maxlength=\"30\">
 		<p>email</p>
 		<input type=\"text\" name=\"email\" placeholder=\"\" required=\"required\" maxlength=\"60\">
 		<input type=\"submit\" value=\"Submit Link\">
		</form>
		<a href=\"Homepage 1.php\" style=\"font-size: 25px\">Go back to Home Page</a>
		
		</div>

		</body>
		</html>";
	}
	else if(isset($_SESSION['user_id']))
	{
		echo"
		<head>
		<title>
		Update Booklink;
		</title>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"styleupload.css\">
		</head>
		<body style=\"background-image: url('Book_login 3.jpg');\">

		<div class=\"login-box\">
  		<form action=\"http://localhost/xampp/Zincludes/password.inc.php\" method=\"POST\">
 		<p>Password</p>
 		<input type=\"password\" name=\"password\" placeholder=\"\"  required=\"required\" maxlength=\"30\">
 		<p>New Password</p>
 		<input type=\"password\" name=\"npassword\" placeholder=\"\"  required=\"required\" maxlength=\"30\">
 		<p>User id</p>
 		<input type=\"text\" name=\"Userid\" placeholder=\"\" required=\"required\" maxlength=\"30\">
 		<p>Email</p>
 		<input type=\"text\" name=\"email\" placeholder=\"\" required=\"required\" maxlength=\"60\">
 		<input type=\"submit\" value=\"Submit Link\">
		</form>
		<a href=\"Homepage 1.php\" style=\"font-size: 25px\">Go back to Home Page</a>
		
		</div>

		</body>
		</html>";
	}
	/*<?php
			if(isset($_SESSION['user_id']))
				{
					$userid = $_SESSION['user_id'];
					echo \"<h1>You are logged in as $userid</h1>\";
				}
		?>*/
	else
	{
		echo "<html><head>";
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Zincludes/Stylesignin.inc.css\"\"></head><body style=\"background-image: url('book_2.jpg')\">";
		echo "<h1>You have to Login first</h1>";
		/*echo "<a href=\"D:\Webpage\XAMPP\htdocs\ xampp\login1.php\">login</a><br>";
		echo "<a href=\"D:\Webpage\XAMPP\htdocs\ xampp\login1.php\">Go back to homepage</a>";*/
		echo "</body></html>";
	}
?>