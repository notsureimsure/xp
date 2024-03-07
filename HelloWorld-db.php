<?php
$servername = "localhost";
$username   = "Tester01!";
$password   = "Tester01!";
$database   = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  // PHP Fatal errors - with current settings? - print the Fatal Error message but not the die message
  die("Connection failed with message: " . mysqli_connect_error());
}

echo "Connected\n";

