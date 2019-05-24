<?php
	session_start();
?>
<html>

<head>

<title>
	Homepage
</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body style="background-image: url('Book_login 1.jpg');>

<div id="container">
<div class="Upportion">
	<h1>Welcome to Kuet Book Sharing archive</h1>
	<p text-align="center">A pdf sharing platform for all Kuetians</p>
</div>


<div class="Downportion">
	<ul class="Homepage">
		<!--li><a href="recent_uploads.html">Recent Uploads</a-->
		<li><a href="http://localhost/xampp/Zincludes/Uploadconfirm.inc.php">Upload Booklink</a>
		<li><a href="http://localhost/xampp/Updateconfirm.php">Update Booklink</a>
		<li><a href="http://localhost/xampp/Deleteconfirm.php">Delete Booklink</a>
		<li><a href="password.php">Change Password</a>
		<li><a href="Signin.php">Create account</a>
		<li><a href="login1.php">Log In/Out</a>
		<li><a href="#toshowabout">About</a>
		<li>
				<form action="http://localhost/xampp/Zincludes/logout.inc.php" method="POST">
				<button type="submit" name="submit">Logout</button>
				</form>
		<!--select name="Book category">
  		<option value="randomtext1">Academic</option>
  		<option value="randomtext2">Non Academic</option>
		</select-->	
	</ul>
 
	
</div>
<div class="bottom" align="bottom" style="padding: 45;">
	<form action="Zincludes/returnsearch.inc.php" method="POST">
	<input type="text" id="Bookname" placeholder="Input books name" name="Bookname" size="38" style="height: 40px ;width: 1148px" >
	<input  type="submit" name="submit" value="Search"><!--onclick="search1()"-->
	</form>
</div>
<br>
<!--img src="book 2.jpg" width="830px" height="420px" style="float: left;" hspace="15"-->
<!--<h3 style="color: white;" id="toshowabout">
	Looking for books at the beginning of the term but can't find them?Wish you had a place where all the books of all tems could be found?Look no farther.Kuet Book sharing archive can help you find your necessary books in time.
</h3>-->
<div class="Description">
	
</div>
<br><br><br>
<?php
		if(isset($_SESSION['user_id']))
		{
			$userid = $_SESSION['user_id'];
			echo "<h1>You are logged in as $userid</h1>";
		}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="lobottom">
<h1 style="color: white;" id="toshowabout">About Us:</h1>
<insert link>
<br>
<h2 style="color: white;" padding="20">
	Looking for books at the beginning of the term but can't find them?Want to find some good non academic books to pass your time with but can find the book?Wish you had a place where all the books of all tems could be found?Look no farther.Kuet Book sharing archive can help you find your necessary books in time.Join our community and contribute to spread knowledge.Our motto is "Kuet is our home,sky is our limit".To give your valuable feedbacks contact us via following email address:saif.kuet15@gmail.com.
</h3>

</div>


</body>

</html>		 