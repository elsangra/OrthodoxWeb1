<?php
 
 $db = new mysqli("localhost","root","", "orthodox_db");
   if($db->connect_errno > 0){
         die('Unable to connect to database [' . $db->connect_error . ']');  } //this line and above lines connect to the server
           
?>