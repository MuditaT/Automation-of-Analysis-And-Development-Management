<?php
SESSION_START();
?>
<html>
<head>
<title> SDLC</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body id="full">
<div id="head">
<div id="head_cen">
<div id="logo"><a href="main.php"><img src="images.jpg" alt="SDLC LOGO" style="width:160px;height:80px"></a><p><center>"YOUR VISSION OUR FUTURE"<center></p>
</div>
<div id="login">
<?php
if(isset($_SESSION['user']))
{?>
<form id="form2" action="logout.php">
<input type="submit" value="Logout"/>
</form>
<form id="form1" action="profile.php">
<input type="submit" value="Profile"/>
</form>
<?php
}
else
{?>
<form name="form2" id="form2" method="post" action="signup.php">
<input type="submit" value="Sign Up"/>
</input>
</form>
<form id="form1" action="login.php">
<input type="submit" value="Login">
</input>
</form>
<?php
}?>
</div>
</div>
<ul id="opt"><!--Associate every product with a unique id-->
<li><a  href="about.php">ABOUT</a></li>
  <li><a  href="services.php">SERVICES</a></li>
  <li><a  href="contact.php">CONTACT</a></li>
</ul>
</div>
<div id="m_img">
<center><img src="storage.jpg" style="width:900px;height:250px"></center>
</div>
<h4 id="m_spec">
<strong><font color="red">SDLC STORAGE DEVICE FEATURES</font></strong><br>
    1 Functionality<br>
    2 Data organization and representation<br>
    3 Hierarchy of storage<br>
        3.1 Primary storage<br>
        3.2 Secondary storage<br>
        3.3 Tertiary storage<br>
        3.4 Off-line storage<br>
    4 Characteristics of storage<br>
        4.1 Volatility<br>
        4.2 Mutability<br>
        4.3 Accessibility<br>
        4.4 Addressability<br>
        4.5 Capacity<br>
        4.6 Performance<br>
        4.7 Energy use<br>
    5 Fundamental storage technologies<br>
        5.1 Semiconductor<br>
        5.2 Magnetic<br>
        5.3 Optical<br>
        5.4 Paper<br>
        5.5 Uncommon<br>
    
</h4>
<?php include("footer.php");
?>
</body>
</html>


