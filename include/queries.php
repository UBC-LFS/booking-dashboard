<?php

//Query all bookings for today
$today = "SELECT FROM_UNIXTIME(start_time) mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time >= UNIX_TIMESTAMP(CURDATE()) and start_time < UNIX_TIMESTAMP(CURDATE() + INTERVAL 1 day)";
  
//Query all bookings for next 5 days
$next_5_days = "SELECT FROM_UNIXTIME(start_time) mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time >= UNIX_TIMESTAMP(CURDATE() + INTERVAL 1 DAY) and start_time < UNIX_TIMESTAMP(CURDATE() + INTERVAL 6 DAY)";
  
?>