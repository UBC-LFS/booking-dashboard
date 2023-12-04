<?php

$query = array (
  "Today" => "SELECT FROM_UNIXTIME(start_time) as date_time, mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time >= UNIX_TIMESTAMP(CURDATE()) and start_time < UNIX_TIMESTAMP(CURDATE() + INTERVAL 1 day)",
  "Next 7 days" => "SELECT FROM_UNIXTIME(start_time) as date_time, mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time >= UNIX_TIMESTAMP(CURDATE() + INTERVAL 1 DAY) and start_time < UNIX_TIMESTAMP(CURDATE() + INTERVAL 8 DAY)",
  "Checked Out" => "SELECT FROM_UNIXTIME(start_time) as date_time, FROM_UNIXTIME(end_time) as check_in, mrbs_room.room_name, name, user_email FROM mrbs_entry JOIN mrbs_room ON mrbs_room.id = mrbs_entry.room_id WHERE start_time <= UNIX_TIMESTAMP(CURDATE()) AND end_time >= UNIX_TIMESTAMP(CURDATE());"
);

$pending_q = array (
  "Pending" => "SELECT COUNT(*) AS cnt FROM mrbs_entry WHERE status='2';"
);

?>

