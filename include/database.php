<?php

function get_bookings($query) {

  require 'conf/mysql.inc';

  // Create connection
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $result =  $conn->query($query);

  $conn->close();

  return $result;

}
?>