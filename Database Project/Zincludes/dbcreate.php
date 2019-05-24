<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }

// Create database
$sql3="CREATE DATABASE mydb1;";
if (mysqli_query($sql3,$conn))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysqli_error();
  }

// Create table
mysqli_select_db("MYdb2", $conn);
$sql1 = "CREATE TABLE Persons
(
user_id varchar(30) not null unique,
user_name varchar(30) not null,
user_email varchar(60) not null,
user_pwd varchar(30) not null,
privilage varchar(100) not null,
primary key(user_email)
);";
$sql2 = "CREATE TABLE Booklink
(
user_booklink varchar(200) not null,
user_bookname varchar(100) not null,
user_email varchar(60) not null,
user_id varchar(30) not null,
user_pwd varchar(30) not null,
spamcount int default 0,
primary key(user_booklink)
);";

// Execute query
mysqli_query($sql1,$conn);
mysqli_query($sql2,$conn);

mysqli_close($conn);
?>