<?php
$servername = "localhost";
$database = "dbpuskesmas";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
// No need for a success message here, as the connection is established silently
