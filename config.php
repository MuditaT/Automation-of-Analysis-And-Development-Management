<?php
session_start();
$m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_sdlc;
   //echo "Database mydb selected";
   $collection = $db->sdlc_customer_info;
   //echo "Collection selected succsessfully";
   $check=$_SESSION['id'];   
   $cursor = $collection->find(array("_id"=>$check),array("Username"=>1,"Mobilenumber"=>1,"Firstname"=>1,"Lastname"=>1,"E-mail"=>1,"Password"=>1,"Title"=>1));
   // iterate cursor to display title of documents
  foreach ($cursor as $document) 
   {
echo"E-mail:";
   echo $document['E-mail'];
echo"<br>";   
echo"Name:";
echo $document['Firstname'];
echo" ";
   echo $document['Lastname'];
echo"<br>";
echo"Username:"   ;
echo $document['Username'];
echo"<br>";   
}
?> 
