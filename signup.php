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
<form action='csignup.php' method='post'>
<table align="center">
<tr><td>Title: </td><td><input type="radio" name="title" value="Mr.">Mr. <input type="radio" name="title" value="Mrs.">Mrs. <input type="radio" name="title" value="Ms.">Ms.</td></tr>
<br>
<tr>
<td>
First Name: </td><td><input type="text" required="required" name="fname" placeholder="First Name" title="Your First Name">
</td>
</tr>
<br>
<tr>
<td>Last Name: </td><td><input type="text" name="lname" required="required" placeholder="Last Name" title="Your Last Name">
</td>
</tr>
<tr>
<td>Mobile No: </td><td><input type="tel" name="mnumber" required="required" placeholder="Mobile No." title="Give your mobile number">
<br>
<tr>
<td>STD Number: </td><td><input type="number" name="stdnumber"  placeholder="STD Code" title="STD Number">
</tr>
<tr>
<td>Telephone No: </td><td><input type="tel" name="tnumber" placeholder="Telephone No." title="Give your landline number">
</tr>
<td>User Name: </td><td><input type="text" name="uname" required="required" placeholder="User Name" title="Provide an User Name"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" required="required" placeholder="**********" title="Provide a password"></td>
</tr>
<tr>
<td>E-mail: </td><td><input type="email" name="email" required="required" placeholder="example@example.com" title="Provide your E-mail">
</td>
</tr>
<tr>
<td><input type="submit"></td><td><input type="reset">
</tr>
</table>
</form>
<?php include("footer.php");
?>
</body>
</html>
