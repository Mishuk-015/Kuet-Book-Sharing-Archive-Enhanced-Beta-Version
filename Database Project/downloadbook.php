<?php 
session_start();

echo "
<html>

<head>

<title>
	Download
</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"Style.css\">
</head>

<body style=\"background-image: url('Book_login 1.jpg');\">";
echo "sjdklafj";
echo "
<ul>
	<li>".$_Session['bookname']."</li>
	<li>".$_Session['booklink']."</li>
	<li>".$_Session['uploader']."</li>


<ul>

</body>

</html>";
?>