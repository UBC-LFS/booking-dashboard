<?php
include 'include/database.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
if (get-bookings()->num_rows > 0) {
?>

  <table class='table table-striped'>
  <thead>
  <tr>
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
    <td>$row['room_name']</td>
    <td>$row['name']</td>
    <td>$row['user_email']</td>
    </tr>

<?php
  }
?>

  </tbody>
  </table>

<?php
} else {
  
    echo "<p>There are no bookings today.";

}
?>

</body>
</html>