<?php

session_start();

if(!isset($_POST['submit']))
{
	include 'db.inc.php';

	$Booklink=mysqli_real_escape_string($conn, $_POST['Booklink']);
	$Bookname=mysqli_real_escape_string($conn, $_POST['Bookname']);
	$Userid=mysqli_real_escape_string($conn, $_POST['Userid']);
	$Password=mysqli_real_escape_string($conn, $_POST['Password']);

	$sql1="SELECT * FROM persons where user_id='$Userid'";
	$result=mysqli_query($conn, $sql1);
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
				echo "Password not matched";
				exit();
			}
			else
			{
				//$hashedpwd=password_hash($Password, PASSWORD_DEFAULT);
				//$row=mysqli_fetch_assoc($result);
				$uploadpwd=$row['user_pwd'];
				$sql2="INSERT INTO booklink(user_booklink,user_bookname,user_email,user_id,user_pwd) VALUES('$Booklink','$Bookname','$Email','$Userid','$uploadpwd');";
				mysqli_query($conn, $sql2);
				//echo "Link Submitted Successfully.Return To Homepage";
				header('Location: ../Upload.php?upload_complete');
				exit();
			}
		}
	}
}
else
{
	echo "Unauthorised access denied.";
	exit();
}