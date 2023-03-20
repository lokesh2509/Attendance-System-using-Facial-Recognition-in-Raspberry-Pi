<?php

error_reporting(E_ERROR | E_PARSE);

// receiver side
session_start();
$class_value = $_SESSION['class'];
$div_value = $_SESSION['div'];
$Time = $_SESSION['Time'];
$date = $_SESSION['date'];
$uid = $_POST['roll'];


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

foreach ($uid as $id) {
    $sql = "UPDATE attendance SET attendance_input='Present' WHERE uid='$id' AND atd_date='$date'";

    if ($conn->query($sql) === TRUE) {
        header('location: give_atd_std_1.html');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
