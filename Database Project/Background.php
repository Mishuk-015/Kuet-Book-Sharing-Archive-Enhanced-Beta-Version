<?php
include_once './Zincludes/db.inc.php';
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$str = $queries['q'];

$sql="SELECT * FROM persons where user_id='".$str."'";
		$result=mysqli_query($conn, $sql);
		$resultcheck=mysqli_num_rows($result);

		if($resultcheck > 0)
		{
			echo "Not Available";
			exit();
		} else {
			echo "Available";
			exit();
		}

?>