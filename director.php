<?php
SESSION_START();
?>
<html>
<head>
<title> SDLC PARTNERS</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body id="full">
<div id="head">
<div id="head_cen">
<div id="logo"><a href="main.php"><img src="images.jpg" alt="SDLC PARTNERS LOGO" style="width:160px;height:80px"></a><p><center>"YOUR VISSION OUR FUTURE"<center></p>
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
<h4 id="col">
<p><strong><u id="heading">BUSSINESS ANALYST 1</u></strong> <sub id="algn">SPECIALISATION:-MOBILE PHONES<br>EXPERIENCE:-10 years<br>COST HANDLING UPTO:-50 crore<br></sub></p>
<form id="form1" action="success.php" method="post">
<input type="submit">
</form>
<br><br><br><br><p><strong><u id="heading">BUSSINESS ANALYST 2</u></strong> <sub id="algn">SPECIALISATION:-PC AND LAPTOPS<br>EXPERIENCE:-15 years<br>COST HANDLING UPTO:-100 crore<br></sub></p>
<form id="form1" action="success.php" method="post">
<input type="submit">
</form>
<br><br><br><br><p><strong><u id="heading">BUSSINESS ANALYST 3</u></strong> <sub id="algn">SPECIALISATION:-MEMORY DEVICES<br>EXPERIENCE:-8 years<br>COST HANDLING UPTO:-25 crore<br></sub></p>
<form id="form1" action="success.php" method="post">
<input type="submit">
</form>
</h4>
<?php include("footer.php");
?>
</body>
</html>