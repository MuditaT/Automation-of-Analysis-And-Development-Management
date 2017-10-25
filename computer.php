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
<center><img src="computer.jpg" style="width:900px;height:250px"></img></center>
</div>
<br><br>

<h4 id="m_spec">
<strong>SDLC</font></strong> is an Indian privately owned  computer technology company that develops, sells, repairs and supports COMPUTERS <br> AND LAPTOPS and related products and services.<br><br>
<br> The full 3-year warranty guarantees next business day service with any hardware problem. <br>Provided that the problem with your computer is covered under the terms of the warranty, all parts and labor are provided by <font color="red">SDLC</font> at no additional charge.
Cost of computer and laptop is ranges from 35,000 to 81,000..
</h4>
<?php include("footer.php");
?>
</body>
</html>
