<?php

$UID = $_POST['UID'];
$date = $_POST['date'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM attendance WHERE uid='$UID' and atd_date='$date'";

if ($conn->query($sql) === TRUE) {
  header('location: delete_atd.html');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>