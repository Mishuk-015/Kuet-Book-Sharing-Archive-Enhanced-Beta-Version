<?php

if(isset($_POST['submit']))
{
	session_start();
	session_destroy();
	setcookie('user_id',"",time()-30);
	setcookie('user_email',"",time()-30);
	setcookie('user_name',"",time()-30);
	setcookie('privilage',"",time()-30);
	header('Location: ../homepage 1.php');
	//echo "Done";
	exit();
}
else
{
	session_start();
	session_destroy();
	setcookie('user_id',"",time()-30);
	setcookie('user_email',"",time()-30);
	setcookie('user_name',"",time()-30);
	setcookie('privilage',"",time()-30);
	header('Location: ../homepage 1.php');
	//echo "Done";
	exit();
}

?>