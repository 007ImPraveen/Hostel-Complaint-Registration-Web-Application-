<!DOCTYPE html>
<html>
<head>
<title>Student login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- your html form -->
<form method="POST">
username:
<input type="text" name="uname">
<br />
Password:
<input type="password" name="pass">
<br />
<input type="submit" name="sub" action="home.php>
</form>
 
<?php 
// this will trigger when submit button click
if(isset($_POST['sub'])){
 
$db = new mysqli("localhost","root","","hostel");

// create query
$query = "SELECT * FROM slogin WHERE sid='".$_POST['uname']."' AND spwd='".$_POST['pass']."'";
 
// execute query
$sql = $db->query($query);
// num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
$n = $sql->num_rows;
 
// if $n is > 0 it mean their is an existing record that match base on your query above 
if($n > 0)
{

echo "sucess ";
} 
else
 {

echo "Incorrect username or password";
}
}
?>
</body>
</html>
