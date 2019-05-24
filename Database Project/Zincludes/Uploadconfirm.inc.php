<?php
	session_start();
	if(isset($_COOKIE['user_id'])){
                $_SESSION['user_id']=$_COOKIE['user_id'];
				$_SESSION['user_email']=$_COOKIE['user_email'];
				$_SESSION['user_name']=$_COOKIE['user_name'];
				$_SESSION['privilage']=$_COOKIE['privilage'];
				header('Location: ../Upload.php');
	}
	else if(isset($_SESSION['user_id']))
	{
		header('Location: ../Upload.php');
	}
	else
	{
		echo "<html><head>";
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Stylesignin.inc.css\"\"></head><body style=\"background-image: url('book_2.jpg')\">";
		echo "<h1>You have to Login first</h1>";
		/*echo "<a href=\"D:\Webpage\XAMPP\htdocs\ xampp\login1.php\">login</a><br>";
		echo "<a href=\"D:\Webpage\XAMPP\htdocs\ xampp\login1.php\">Go back to homepage</a>";*/
		echo "</body></html>";
	}
?>