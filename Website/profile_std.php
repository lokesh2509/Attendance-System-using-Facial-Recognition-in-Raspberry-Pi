<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile_std.css">
</head>

<body>
    <div class="header">
        <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
    </div>
    <form id="msform" method="post" action="authentication_fac.php">
        <fieldset>
            <center><img src="images/user_profile.png" width="200" height="200"></center>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "attendance_system";

            session_start();
            $s_uid = $_SESSION['uid'];
            $s_value = $_SESSION['uname'];

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM std_reg where uid = $s_uid";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {

                    $class;

                    if ($row["class"] == "bsc") {
                        $class = "B.Sc";
                    } elseif ($row["class"] == "bsccs") {
                        $class = "B.Sc.CS";
                    } elseif ($row["class"] == "bscit") {
                        $class = "B.Sc.IT";
                    } elseif ($row["class"] == "bscbio") {
                        $class = "B.Sc.BIO";
                    } elseif ($row["class"] == "bscavi") {
                        $class = "B.Sc.AVI";
                    } elseif ($row["class"] == "bscds") {
                        $class = "B.Sc.DS";
                    } elseif ($row["class"] == "bscas") {
                        $class = "B.Sc.AS";
                    } elseif ($row["class"] == "bcom") {
                        $class = "B.Com";
                    } elseif ($row["class"] == "bcomaf") {
                        $class = "B.Com.AF";
                    } elseif ($row["class"] == "bcombi") {
                        $class = "B.Com.BI";
                    } elseif ($row["class"] == "bcomfm") {
                        $class = "B.Com.Fm";
                    } elseif ($row["class"] == "bcomim") {
                        $class = "B.Com.IM";
                    } elseif ($row["class"] == "bcomas") {
                        $class = "B.Com.AS";
                    } elseif ($row["class"] == "bms") {
                        $class = "BMS";
                    } elseif ($row["class"] == "bmm") {
                        $class = "BMM";
                    }



                    echo "<h3 class=\"fs-title\"><b>UID: </b></h3>" . "<div class=\"txt_border\">" . $row["uid"] . "</div>" .
                        "<h3 class=\"fs-subtitle\">Name: </h3>" . "<div class=\"txt_border\">" . $row["name"] . "</div>" . "
                <h3 class=\"fs-subtitle\">Class: </h3>" . "<div class=\"txt_border\">" . $class . "</div>" . "
                <h3 class=\"fs-subtitle\">Division: </h3>" . "<div class=\"txt_border\">" . $row["std_div"] . "</div>" . "
                <h3 class=\"fs-subtitle\">Email: </h3>" . "<div class=\"txt_border\">" . $row["email"] . "</div>" . "
                <h3 class=\"fs-subtitle\">Phone Number: </h3>" . "<div class=\"txt_border\">" . $row["phone_no"] . "</div>" . "
                ";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>



        </fieldset>
    </form>
</body>

</html>