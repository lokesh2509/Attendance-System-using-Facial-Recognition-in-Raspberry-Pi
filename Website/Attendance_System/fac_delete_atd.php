<?php

$fac_id = $_POST['fac_id'];
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
$sql = "DELETE FROM fac_attendance WHERE fac_id='$fac_id' and date='$date'";

if ($conn->query($sql) === TRUE) {
  header('location: fac_delete_atd.html');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>