<?php
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=md5($_POST['password']);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mnumber=$_POST['mnumber'];
$tnumber=$_POST['tnumber'];
$stdnumber=$_POST['stdnumber'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_sdlc;
   $collection = $db->sdlc_customer_info;
   $document = array( 
      "E-mail"=>$email, 
      "Username"=>$uname,
      "Password"=>$password,
      "Firstname"=>$fname,
      "Lastname"=>$lname,
      "Mobilenumber"=>$mnumber,
	"STDcode"=>$stdnumber,
	"Telephonenumber"=>$tnumber

);
   $collection->insert($document);
   echo "You have signed up successfully, close this window and check your email for confirmation mail.";
?>
