<?php
$con = mysqli_connect("localhost", "root", "", "orthodox_db");
if ( mysqli_connect_error() ) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>