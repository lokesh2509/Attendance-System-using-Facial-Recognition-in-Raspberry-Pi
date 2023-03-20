<?php

    error_reporting(E_ERROR | E_PARSE);
    $fac_id = $_POST["fac_id"];
    $date = $_POST["date"];


    $mysqli = new mysqli("localhost", "root", "", "attendance_system");
    
    if ($mysqli ==  false) {
        die("ERROR: Could not connect. ".$mysqli->connect_error);
    }
    
    $sql = "INSERT INTO fac_attendance VALUES('$fac_id', '$date', 'Present') ";
        if ($mysqli->query($sql) == true)
    {
        header('location: give_atd_fac_1.html');
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".$mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
?>