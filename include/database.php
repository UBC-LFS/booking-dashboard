<?php

require 'conf/mysql.inc';

function get_bookings() {

  // Create connection
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  //Query all bookings for today
  $query = "SELECT mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time >= UNIX_TIMESTAMP(CURDATE()) and start_time < UNIX_TIMESTAMP(CURDATE() + INTERVAL 1 day)";
  
  $result =  $conn->query($query);

  $conn->close();

  return $result;

}
?>