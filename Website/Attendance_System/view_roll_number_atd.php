<!DOCTYPE html>
<html>
    <head>
        <title>View Class Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view_class_atd.css">
    </head>
    <body>
        <div class="header">
            <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
        </div>
        <table>
            <td><b>Date</b></td>
            <td><b>Subject</b></td>
            <td><b>Attendance</b></td>
            <?php

            
            $UID = $_POST["UID"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "attendance_system";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM attendance where uid='$UID'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["atd_date"]."</td>
            <td>". $row["subject"]."</td>
            <td>". $row["attendance_input"]."</td>
            </tr>";
            }
            } else {
            echo "0 results";
            }

            mysqli_close($conn);
            ?>








        </table>

    </body>
</html>