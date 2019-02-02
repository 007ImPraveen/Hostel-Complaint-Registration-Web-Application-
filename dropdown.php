<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #f1f1f1;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    right: 0;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">HOME</a></li>
  <li><a href="#news">NEWS</a></li>
  <li><a href="#teams">TEAMS</a></li>
  <li><a href="#gallery">GALLERY</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="#about">ABOUT</a></li>
  <li class="dropdown" style="float:right">
    <a href="#login" class="dropbtn">LOGIN</a>
    <div class="dropdown-content">
      <a href="#">ADMIN</a>
      <a href="#">STUDENT</a>
    </div>
  </li>
</ul>

</body>
</html>
