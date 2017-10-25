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
<br>
<br>
<p id="col">SDLC set out to provide clients with high-quality execution
services that results in real business value and tangible customer
outcomes.<br> We do this by working effectively with business and IT and
by leveraging industry best practices so that we can become the
Execution Partner of Choice <br>for our clients</p><br>
<p id="col">Each leadership team member brings his or her own strengths and
experience to help balance and complement our organization. The result
is a high-performance culture that is focused on working with our
customers to drive real value
</p><br>
<p id="col">The IT consulting company team has created an approach designed on
collaboration and a highly experienced, professional staff. We align
the right people, processes and technologies for the specific needs of
our clients</p>
<?php include("footer.php");
?>
</body>
</html>
