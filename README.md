# Booking Dashboard

To display all bookings for today and the next 5 days from the Learning Centre MRBS install. It will also alert if there are bookings pending admin confirmation, the number of pending bookings is a link to the admin area in MRBS.

## Deploying

This applicaton requires PHP and uses mysqli for the database connection on the web server where it is deployed.

## Configuration

This code will be hosted on the same server as MRBS and we will reference the database connection setup of MRBS. The path is hard coded into the `database.php` file under the `include` directory. Edit as necessary.
