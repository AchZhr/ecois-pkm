<!DOCTYPE html>
<html>
<body >

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecois-pkm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
</html>
</body >