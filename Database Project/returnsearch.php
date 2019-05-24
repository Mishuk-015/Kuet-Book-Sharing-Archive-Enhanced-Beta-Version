<?php

include_once 'db.inc.php';

if(isset($_POST['Bookname']))
{


	$bookname=mysqli_real_escape_string($conn, $_POST['Bookname']);
	$sql="SELECT * FROM booklink where user_bookname='$bookname'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$num_rows=mysqli_num_rows($result);
	if($num_rows>0)
	{
		echo $row['user_booklink'];
	}
	else
	{
		echo "Book not Found";
	}
}
else
{
	header('Location: ../Homepage 1.php');
	exit();
}

?>