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
            $adm_id = $_SESSION['adm_id'];

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM adm_reg where adm_id = $adm_id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h3 class=\"fs-title\"><b>UID: </b></h3>" . "<div class=\"txt_border\">" . $row["adm_id"] . "</div>" .
                        "<h3 class=\"fs-subtitle\">Name: </h3>" . "<div class=\"txt_border\">" . $row["name"] . "</div>" . "
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