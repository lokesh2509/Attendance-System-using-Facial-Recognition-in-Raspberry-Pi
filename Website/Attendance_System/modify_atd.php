

<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$class = $_POST['std_class'];
$div = $_POST['std_div'];
$date = $_POST['date'];
$UID = $_POST['UID'];
$attendance = $_POST['attendance'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE attendance SET attendance_input='$attendance' WHERE uid='$UID' and atd_date='$date' and class='$class' and div_input = '$div'";

if ($conn->query($sql) === TRUE) {
    // header('location: Class_Admin_Attendance_Modify2.html');
    // die();
  header('location: modify_atd.html');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>