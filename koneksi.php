<?php
$username = "root";
$password = "";
$database = "db_test_backend";
$mysqli = new mysqli("localhost", $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>