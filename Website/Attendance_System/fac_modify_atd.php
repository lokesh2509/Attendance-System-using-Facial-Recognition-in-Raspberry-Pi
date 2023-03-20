

<?php

$date = $_POST['date'];
$fac_id = $_POST['fac_id'];
$atd = $_POST['atd'];

$link = mysqli_connect("localhost", "root", "", "attendance_system");

if($link === false){
	die("ERROR: Could not connect. "
				. mysqli_connect_error());
}

$sql = "UPDATE fac_attendance SET attendance='$atd' WHERE fac_id=$fac_id";
if(mysqli_query($link, $sql)){
	header('location: fac_modify_atd.html');
} else {
	echo "ERROR: Could not able to execute $sql. "
							. mysqli_error($link);
}
mysqli_close($link);
?>

