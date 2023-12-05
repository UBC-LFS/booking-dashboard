<?php

function get_bookings($query) {

  require "../web/config.inc.php";
  require "../web/sites/lc/config.inc.php";

  // Create connection
  $conn = mysqli_connect($db_host, $db_login, $db_password, $db_database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $result =  $conn->query($query);

  $conn->close();

  return $result;

}
?>
