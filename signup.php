<!DOCTYPE html>
<html>
<head>
<title>signup</title>

</head>
<body >



<?php
	// this will trigger when submit button click
	if(isset($_POST['submit'])){

		$db = new mysqli("localhost","root","","hostel");
		
		$user_rid = $_POST['rid'];
		$user_email = $_POST['email'];
        $user_name = $_POST['sid'];
        $user_pass = $_POST['spwd'];
       

		// create query
		$query = "INSERT INTO slogin (rid, email, sid, spwd ) VALUES ('$user_rid', '$user_email', '$user_name',  '$user_pass')";

		// execute query
		$sql = $db->query($query);

		if($sql){

			header("Location: loginform.php");
		} else {

			echo "fill all the fields";
		}
	}
?>
</body>
</html>
