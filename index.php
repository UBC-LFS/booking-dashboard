<?php
include 'include/database.php';
include 'include/queries.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="./images/ubc-logo-2018-crest-blue-rgb72.jpg" width="30" height="36">
        Learning Centre - Booking Dashboard
        </a>
    </div>
</nav>

<div class="row">
<div class="col-md-8 offset-md-2">

<?php
  $result = get_bookings($pending_q);
  $row = $result->fetch_assoc();

  print "<b>Pending:</b>, there are $row['count(*)'] requests for review";
?>

<?php
foreach($query as $k => $v) {
  print "<h2>$k</h2>"; 
  $result = get_bookings($v);

  if ($result->num_rows > 0) {
?>
  
    <table class='table table-striped'>
    <thead>
    <tr>
    <th scope='col'>Date/Time</th>

<?php
    if ($k == "Checked Out") {
?>
      <th scope='col'>Return Date</th>
<?php
    };
?>

    <th scope='col'>Item</th>
    <th scope='col'>Notes</th>
    <th scope='col'>Email</th>
    </tr>
    </thead>
    <tbody>
  
<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
  
      <tr>
      <td><?php echo $row['date_time']; ?></td>
<?php
    if ($k == "Checked Out") {
?>
      <td scope='col'><?php echo $row['check_in']; ?></td>
<?php
    };
?>
      <td><?php echo $row['room_name']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['user_email']; ?></td>
      </tr>
  
<?php
    }
?>
  
    </tbody>
    </table>
  
<?php
  } else {
    
      echo "<p>There are no bookings.";
  
  }
}
?>

</div>
</div>
</body>
</html>
