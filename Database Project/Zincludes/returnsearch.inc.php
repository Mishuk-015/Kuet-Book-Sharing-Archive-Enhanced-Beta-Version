<?php

session_start();

if(isset($_POST['Bookname']))
{
	if(isset($_SESSION['user_id']))
	{
		include 'db.inc.php';
		$Bookname=mysqli_real_escape_string($conn, $_POST['Bookname']);
		$sql="SELECT * FROM booklink where user_bookname='$Bookname'";
		//$sql2="SELECT * FROM booklink where user_bookname='$Bookname'";
		$result=mysqli_query($conn, $sql);
		//$result2=mysqli_query($conn, $sql2);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck<1)
		{
			header('Location: ../Homepage 1.php?Book not found');
			//echo "user does not exist.";
			exit();
		}
		else
		{
			if($row=mysqli_fetch_assoc($result))
			{
				
				$_SESSION['booklink']=$row['user_booklink'];
				$_SESSION['bookname']=$row['user_bookname'];
				$_SESSION['uploader']=$row['user_id'];
				$_SESSION['spamcount']=$row['spamcount'];
				$bookname = $_SESSION['bookname'];
				$link = $_SESSION['booklink'];
				$uploader = $_SESSION['uploader'];

				//header("Location: ../downloadbook.php");
				//echo $_SESSION['privilage'];
				echo "
					<html>
					<head>

					<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesignin.inc.css\"> 
					</head>
					<body style=\"background-image: url('book_1.jpg')\";>
					<div class=\"login-box\">
						<p style=\"font-weight=\"Bold\";\">Book Name : $bookname</p>
						<p>Book link : <a href='$link'>$link</a></p>
						<p>Book Uploader: $uploader</p>
					</div>
					</body>
					</html>
				";

				//header('returnsearchReal.inc.php');<button name='delete' onclick= \"location.href='Deleteconfirm.inc.php'\">Delete Link</button>

			}
		}
	}
	else
	{
		header('Location: ../Login1.php?login_to_search');
	}
}
else
{
	echo "Unauthorised access denied";
	exit();
}

?>