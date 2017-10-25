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
<p>
<?php include('config.php');?>
<form id="form1" action="cupdate.php">
<input type="submit" value="Update Profile">
</form>
<form id="form1" action="aupdate.php" method="POST">
<input type="submit" value="Update Address">
</form>
<form id="form2" action="includes/delete.php" method="POST">
<input type="submit" value="Delete Account">
</form>
</p>
<?php include('footer.php');?>
</body>
</html>



