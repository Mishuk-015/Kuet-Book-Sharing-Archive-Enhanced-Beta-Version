<?php

session_start();

if(!isset($_POST['submit']))
{
	include 'db.inc.php';

	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$npassword=mysqli_real_escape_string($conn, $_POST['npassword']);
	$Userid=mysqli_real_escape_string($conn, $_POST['Userid']);
	$email=mysqli_real_escape_string($conn, $_POST['email']); 
	//$Password=password_hash($_POST['Password'], PASSWORD_DEFAULT);

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
			if(!($password == $row['user_pwd'] && $Userid == $row['user_id']))//||$Email !=$row['user_email']
			{
				echo "User ID or Password not matched";
				exit();
			}
			else
			{
				//$hashedpwd=password_hash($Password, PASSWORD_DEFAULT);
				//$row=mysqli_fetch_assoc($result);
				$uploadpwd=$row['user_pwd'];
				$sql3="UPDATE persons set user_pwd='$npassword' where user_pwd='$password';";
				$sql4="UPDATE booklink set user_pwd='$npassword' where user_pwd='$password';";
				//$sql2="INSERT INTO booklink(user_booklink,user_bookname,user_email,user_id,user_pwd) VALUES('$Booklink','$Bookname','$Email','$Userid','$uploadpwd');";
				mysqli_query($conn, $sql3);
				mysqli_query($conn, $sql4);
				//echo "Link Submitted Successfully.Return To Homepage";
				header('Location: http://localhost/xampp/Zincludes/logout.inc.php');
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