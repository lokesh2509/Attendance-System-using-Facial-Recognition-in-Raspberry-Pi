<?php
$user_email = $_POST['user_email'];
$user_name = $_POST['user_name'];
$radio1 = $_POST['radio1'];
$radio2 = $_POST['radio2'];
$radio3 = $_POST['radio3'];
$radio4 = $_POST['radio4'];
$radio5 = $_POST['radio5'];
$radio6 = $_POST['radio6'];
$radio7 = $_POST['radio7'];
$radio8 = $_POST['radio8'];
$radio9 = $_POST['radio9'];
$radio10 = $_POST['radio10'];
$txtarea = $_POST['txtarea'];

$conn = new mysqli('localhost', 'root', '', 'attendance_system');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into feedback values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $user_email, $user_name, $radio1, $radio2, $radio3,  $radio4,  $radio5,  $radio6,  $radio7,  $radio8,  $radio9,  $radio10,  $txtarea);
    $execval = $stmt->execute();
    echo $execval;

    session_start();
    $_SESSION['Message'] = "!!! FEEDBACK Sent !!!";
    header('location: Feedback.php');
    die();
    $stmt->close();
    $conn->close();
}
