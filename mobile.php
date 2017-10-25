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
<div id="m_img">
<center><img src="mobile.jpg" style="width:900px;height:250px "></center>
</div>
<br>
<h4 id="m_spec">
<strong><font color="red">SDLC PARTNERS</font></strong>  is one of five business units within SDLC PARTNERS Electronics
, belonging to the SDLC PARTNERS Group, <br>and consists of the Mobile
 Communications Division, Telecommunication Systems Division, Computer Division, 
 MP3 Business Team, <br>Mobile Solution Centre and Telecommunication R&D Centre. Telecommunication Business produces 
 a full spectrum of products <br>from mobiles and other mobile devices such
 as MP3 players and laptop computers to telecommunication network infrastructure. <br>
<br><strong><font color="red">SDLC SMARTPHONE FEATURES</font></strong><br>

   1 General features<br>
    2 Software and applications<br>
    3 Power supply<br>
        3.1 Battery
    4 SIM card<br>
        4.1 Multi-card hybrid phones
    5 Display<br>
    6 Central processing unit<br>
    7 Miscellaneous features<br>
    8 Multi-mode and multi-band mobile phones<br>
        8.1 Challenges in producing multi-mode phones<br>
    9 Data communications<br>
    10 Vulnerability to viruses<br>
    11 Cameras<br>

</h4>
<?php include("footer.php");
?>
</body>
</html>
