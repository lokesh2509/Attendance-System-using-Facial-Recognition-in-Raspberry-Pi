<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Student Home Page</title>
    <link rel="stylesheet" href="std_home.css">

</head>

<body>

    <div class="header">
        <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
    </div>

    <div class="topnav">

        <!--Feedback page-->
        <a href="Feedback.php">Feedback</a>
        <!--About Team Page-->
        <a href="About_Us.html">About US</a>
        <!--Student Profile Page-->
        <a href="profile_std.php">Profile</a>
        <!--Home page-->
        <a href="home_page.php">Home</a>

    </div>
    <center>

        <h1 style="color: blue; font-family: Times New Roman;"><u>Student Home Page</u></h1>
        <h5>Welcome to the Student's Page</h5>

        <?php
        session_start();
        $s_uid = $_SESSION['uid'];
        $s_value = $_SESSION['uname'];
        ?>

    </center>









    <div class="cards">
        <div class="card">
            <center><img src="images/student.png" alt="..." width="100">
            </center>
            <h5>Own Attendance (Student Attendance)</h5>
            <form class="msform">
                <a href="view_atd_std.php" class="action-button">View Attendance</a>

            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>