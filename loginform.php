<?php
if(isset($_SESSION['login_user']))
{
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <style>
body {
    background-image: url("coll.jpg");
    background-size: 100%;
}
</style>
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="item">
 <img align="right" class="img-responsive" src="A1.png" width="120" height="120">
 </div>
<div class="item">
 <img class="img-responsive" src="H.png" width="350" height="90">
<div id="main">
<div id="login">
<h3>Login</h3>
<form action="login.php" method="post">
<label>UserID :</label>
<input id="sid" name="sid" placeholder="Enter your userid" type="text"><br><br>
<label>Password :</label>
<input id="spwd" name="spwd" placeholder="Enter your password" type="password"><br><br>
<input name="submit" type="submit" value=" Login " action="home.html">
</form>
</div>
</div>
</body>
</html>
