<?php
$uid = $_POST['std_uid'];
$name = $_POST['std_name'];
$class = $_POST['std_class'];
$div = $_POST['std_div'];
$email = $_POST['std_email'];
$pnumber = $_POST['std_pnumber'];
$pass = $_POST['std_pass'];
$cpass = $_POST['std_cpass'];

$conn = new mysqli('localhost', 'root', '', 'attendance_system');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    if ($pass == $cpass) {
        $stmt = $conn->prepare("insert into std_reg values(?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("sssssss", $uid, $name, $class, $div, $pnumber, $email, $pass);
        $execval = $stmt->execute();
        echo $execval;

        // sender side
        session_start();

        $_SESSION['class'] = $class;
        $_SESSION['div'] = $div;
        $_SESSION['uid'] = $uid;

        header('location: std_reg_3.php');
        die();






        $stmt->close();
        $conn->close();
    } else {
        echo "Error";
    }
}
