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
            <td><b>UID</b></td>
            <td><b>Time</b></td>
            <td><b>Attendance</b></td>
            <?php

            $class = $_POST["std_class"];
            $div = $_POST["std_div"];
            $date = $_POST["date"];

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

            $sql = "SELECT * FROM attendance where class='$class' and div_input = '$div' and atd_date = '$date'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["atd_date"]."</td>
            <td>". $row["uid"]."</td>
            <td>". $row["time_input"]."</td>
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