# Booking Dashboard

To display all bookings for today and the next 5 days from the Learning Centre MRBS install.

## Deploying

This applicaton requires PHP and uses mysqli for the database connection on the web server where it is deployed.

## Configuration

Create a conf directory and a mysql.inc file within it to store your database details.

`mysql.inc`

```php
<?php
$db_host = "DB host";
$db_database = "DB Name";
$db_user = "DB Username";
$db_pass = 'DB password';
?>
```

Ensure that the web server user can read this file, remove access for all other users.