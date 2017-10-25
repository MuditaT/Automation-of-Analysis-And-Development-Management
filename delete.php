<?php
session_start();   
// connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_customer_info;

   // now remove the document
   $collection->remove(array("_id"=>$_SESSION['id']));
session_destroy();
exit;
?>
