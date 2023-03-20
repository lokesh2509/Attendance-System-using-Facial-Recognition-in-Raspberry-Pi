<!DOCTYPE html>
<html>

<head>
    <title>Give Attendance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="give_atd_std_2.css">
</head>

<body>
    <div class="header">
        <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
    </div>


    <!-- For inserting absent attendance -->
    <?php

    error_reporting(E_ERROR | E_PARSE);
    $class = $_POST["std_class"];
    $div = $_POST["std_div"];
    $Time = $_POST["Time"];
    $date = $_POST["date"];

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

    // echo $class;

    $sql = "SELECT * FROM std_reg where class='$class' AND std_div='$div'";
    $result = $conn->query($sql);

    $absent_uid = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $absent_uid[] = $row['uid'];
            // echo gettype($row['uid']);
        }
    } else {
        echo "0 results";
    }

    $absent = "Absent";

    // print_r($absent_uid);

    foreach ($absent_uid as $ab) {
        $stmt = $conn->prepare("insert into attendance values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ab, $class, $div, $Time,$date, $absent);
        $execval = $stmt->execute();
    }

    ?>

    <form method="post" action="give_atd_std_3.php">
        <table>

            <!-- For creating check boxs and inserting present -->
            <?php

            error_reporting(E_ERROR | E_PARSE);
            $class = $_POST["std_class"];
            $div = $_POST["std_div"];
            $subject = $_POST["subject"];
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

            $sql = "SELECT * FROM std_reg order by uid";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row["class"] == $class) {
                        if ($row["std_div"] == $div) {
                            echo "<tr>
             <td>" . $row["uid"] . "</td>
             <td>" . $row["name"] . "</td>
             <td>" . "<input type=\"checkbox\" name=\"roll[]\" value=" . $row["uid"] . ">" . "</td>
             </tr>";



                            // sender side
                            session_start();

                            $_SESSION['class'] = $class;
                            $_SESSION['div'] = $div;
                            $_SESSION['Time'] = $Time;
                            $_SESSION['date'] = $date;
                            $_SESSION['uid'] = $row["uid"];
                        }
                    }
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </table>
        <input type="submit" name="submit">

</body>

</html>