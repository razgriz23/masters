<?php
/*To connect to a database*/

$server = 'localhost';
$user = 'root';
$pass = 'Weather8';
$db = 'weatherproject';

$con=mysqli_connect($server, $user, $pass, $db);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>