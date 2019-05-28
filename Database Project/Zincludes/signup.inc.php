<?php

if(isset($_POST['submit']))
{
	include_once 'db.inc.php';

	$Email=mysqli_real_escape_string($conn, $_POST['Email']);
	$Userid=mysqli_real_escape_string($conn, $_POST['Userid']);
	$name=mysqli_real_escape_string($conn, $_POST['name']);
	$Password=mysqli_real_escape_string($conn, $_POST['Password']);
	$privilage=0;
	//$cPassword=mysqli_real_escape_string($conn, $_POST['cPassword']);


	if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
	{
		echo "Invalid email entered.Go back to input valid email.";
		exit();
	}
	else
	{
		$sql="SELECT * FROM persons where user_id='$Userid'";
		$result=mysqli_query($conn, $sql);
		$resultcheck=mysqli_num_rows($result);

		if($resultcheck > 0)
		{
			echo "User Id already taken.";
			exit();
		}

		else
		{
			//$hashedpwd=password_hash($Password, PASSWORD_DEFAULT);
			//Insertion into database for login 
			$sql="INSERT INTO persons(user_id,user_name,user_email,user_pwd,privilage) VALUES('$Userid','$name','$Email','$Password','$privilage');";
			mysqli_query($conn, $sql);
			//echo "User Created.Go back to Home Page";
			header('Location: ../Homepage 1.php?signup_complete');
			exit();
		}
	}
}
else{
	echo "Unauthentic access denied";
	//header("Location: ../C:/Users/User/Desktop/CSE%203100-lab%202/KUET%20book%20sharing%20archive/login_v2.html");
	exit();
}
