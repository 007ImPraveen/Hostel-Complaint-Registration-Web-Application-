<!DOCTYPE html>
<html>
<head>
<title>login</title>

</head>
<body >
	

<?php
	// this will trigger when submit button click
	if(isset($_POST['submit'])){

		$db = new mysqli("localhost","root","","hostel");

		// create query
		$query = "SELECT * FROM slogin WHERE sid='".$_POST['sid']."' AND spwd='".$_POST['spwd']."'";

		// execute query
		$sql = $db->query($query);
		// num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
		$n = $sql->num_rows;

		// if $n is > 0 it mean their is an existing record that match base on your query above
		if($n > 0){

			echo "SUCCESS";
		} else {

			echo "INCORRECT USERNAME OR PASSWORD";
		}
	}
?>
</body>
</html>
