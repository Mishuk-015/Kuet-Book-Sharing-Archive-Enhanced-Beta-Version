<?php

session_start();

if(!isset($_POST['submit']))
{
	include 'db.inc.php';

	$Booklink=mysqli_real_escape_string($conn, $_POST['Booklink']);
	//$nBooklink=mysqli_real_escape_string($conn, $_POST['nBooklink']);
	$Userid=mysqli_real_escape_string($conn, $_POST['Userid']);
	$Password=mysqli_real_escape_string($conn, $_POST['Password']); 
	//$Password=password_hash($_POST['Password'], PASSWORD_DEFAULT);

	$sql1="SELECT * FROM booklink where user_booklink='$Booklink';";
	$sql2="SELECT * FROM persons where user_id='$Userid';";
	$result=mysqli_query($conn, $sql1);
	$result2=mysqli_query($conn, $sql2);
	$resultcheck=mysqli_num_rows($result);
	$resultcheck2=mysqli_num_rows($result2);
	if($resultcheck<1)
	{
		echo "Booklink does not exist.";
		exit();
	}
	else
	{
		if ($row2=mysqli_fetch_assoc($result2)) 
		{
			$privilage=$row2['privilage'];
			if($privilage==100)
			{
				$sql3="DELETE FROM booklink where user_booklink='$Booklink';";
				//$sql2="INSERT INTO booklink(user_booklink,user_bookname,user_email,user_id,user_pwd) VALUES('$Booklink','$Bookname','$Email','$Userid','$uploadpwd');";
				mysqli_query($conn, $sql3);
				//echo "Link Submitted Successfully.Return To Homepage";
				header('Location: ../Deleteconfirm.php?delete_complete_admin_authority_applied');
				exit();
			}	
		}
		if($row=mysqli_fetch_assoc($result))
		{
			if(!($Password == $row['user_pwd'] && $Userid == $row['user_id']))//||$Email !=$row['user_email']
			{
				echo "User ID or Password not matched";
				exit();
			}
			else
			{
				//$hashedpwd=password_hash($Password, PASSWORD_DEFAULT);
				//$row=mysqli_fetch_assoc($result);
				//$uploadpwd=$row['user_pwd'];
				$sql3="DELETE FROM booklink where user_booklink='$Booklink';";
				//$sql2="INSERT INTO booklink(user_booklink,user_bookname,user_email,user_id,user_pwd) VALUES('$Booklink','$Bookname','$Email','$Userid','$uploadpwd');";
				mysqli_query($conn, $sql3);
				//echo "Link Submitted Successfully.Return To Homepage";
				header('Location: ../Deleteconfirm.php?delete_complete');
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