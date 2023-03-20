<?php


$class = $_POST['std_class'];
$div = $_POST['std_div'];

// sender side
session_start();
            
$_SESSION['class']=$class;
$_SESSION['div']=$div;

header('location: std_reg_2.php');
die();
?>