<?php


session_start();

if(isset($_COOKIE['user_id']))
{
                $_SESSION['user_id']=$_COOKIE['user_id'];
				$_SESSION['user_email']=$_COOKIE['user_email'];
				$_SESSION['user_name']=$_COOKIE['user_name'];
				$_SESSION['privilage']=$_COOKIE['privilage'];
				header('Location: ../login1.php?login_complete');	
}

if(!isset($_POST['submit']))
{
	include 'db.inc.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$Email=mysqli_real_escape_string($conn, $_POST['Email']);
	$Userid=mysqli_real_escape_string($conn, $_POST['Userid']);
	$Password=mysqli_real_escape_string($conn, $_POST['Password']);//password_hash($_POST['Password'], PASSWORD_DEFAULT);
}

	$sql="SELECT * FROM persons where user_id='$Userid'";
	$result=mysqli_query($conn, $sql);
	$resultcheck=mysqli_num_rows($result);
	if($resultcheck<1)
	{
		echo "user does not exist.";
		exit();
	}
	else
	{
		if($row=mysqli_fetch_assoc($result))
		{
			if(!($Password == $row['user_pwd']))//||$Email !=$row['user_email']
			{
				echo "password or email not matched";
				exit();
			}
			else//&&$Email==$row['user_email']
			{
				setcookie('user_id',$row['user_id'],time()+30,"/");
				setcookie('user_email',$row['user_email'],time()+30,"/");
				setcookie('user_name',$row['user_name'],time()+30,"/");
				setcookie('privilage',$row['privilage'],time()+30,"/");

				$_SESSION['user_id']=$row['user_id'];
				$_SESSION['user_email']=$row['user_email'];
				$_SESSION['user_name']=$row['user_name'];
				$_SESSION['privilage']=$row['privilage'];
				header('Location: ../Homepage 1.php?login_complete');
				//echo "Log in successful.Return to homepage.";
				exit();
			}
		}
	}
}
else
{
	header('Location: ../login1.php');
	//echo "Unauthorised access denied.";
	exit();
}

/*<?php
			if(isset($_SESSION['user_id']))
				{
					$userid = $_SESSION['user_id'];
					echo "<h1>You are logged in as $userid</h1>";
				}
		?>
<?php

	if(isset($_COOKIE['user_id'])){
		
                $_SESSION['user_id']=$_COOKIE['user_id'];
				$_SESSION['user_email']=$_COOKIE['user_email'];
				$_SESSION['user_name']=$_COOKIE['user_name'];
				$_SESSION['privilage']=$_COOKIE['privilage'];
	}

?>
*/
			

