<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta http-equiv="refresh" content="10">
    <link rel="stylesheet" href="home_page.css">
</head>

<body>

    <input type="checkbox" id="side" name="" value="">


    <div class="page-wrap">

        <div class="page-content">
            <header>
                <center>
                    
    <div class="header">
        <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
    </div>
                </center>
            </header>
            <label for="side" class="toggle">☰</label>

            <!-- Main Body -->
            <!-- Right Side -->
            <div class="main">

                <!--cards -->
                <div class="card">
                    <div class="title">
                        <h3>
                            Admin</h3>
                    </div>
                    <div class="line"></div>
                    <div class="des">

                        <p class="para"><b>Total Number of Admins</b></p>
                        <p class="para"><b> <?php

                                            // Servername
                                            $servername = "localhost";

                                            // Username
                                            $username = "root";

                                            // Empty password
                                            $password = "";

                                            // Database name
                                            $dbname = "attendance_system";

                                            // Create connection by passing these
                                            // connection parameters
                                            $conn = new mysqli(
                                                $servername,
                                                $username,
                                                $password,
                                                $dbname
                                            );

                                            // SQL query to find total count
                                            // of college_data table
                                            $sql = "SELECT count(*) FROM adm_reg ";
                                            $result = $conn->query($sql);

                                            // Display data on web page
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo $row['count(*)'];
                                                echo "<br />";
                                            }

                                            // Close the connection
                                            $conn->close();

                                            ?></b></p>
                        <button class="button">More Information...</button>
                    </div>
                </div>

                <!--cards -->
                <div class="card1">
                    <div class="title">
                        <h3>
                            Faculty</h3>
                    </div>
                    <div class="line"></div>
                    <div class="des">

                        <p class="para"><b>Total Number of Faculty Members</b></p>
                        <p class="para"><b> <?php

                                            // Servername
                                            $servername = "localhost";

                                            // Username
                                            $username = "root";

                                            // Empty password
                                            $password = "";

                                            // Database name
                                            $dbname = "attendance_system";

                                            // Create connection by passing these
                                            // connection parameters
                                            $conn = new mysqli(
                                                $servername,
                                                $username,
                                                $password,
                                                $dbname
                                            );

                                            // SQL query to find total count
                                            // of college_data table
                                            $sql = "SELECT count(*) FROM fac_reg ";
                                            $result = $conn->query($sql);

                                            // Display data on web page
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo $row['count(*)'];
                                                echo "<br />";
                                            }

                                            // Close the connection
                                            $conn->close();

                                            ?></b></p>
                        <button class="button1">More Information...</button>
                    </div>
                </div>

                <!--cards -->
                <div class="card2">
                    <div class="title">
                        <h3>
                            Student</h3>
                    </div>
                    <div class="line"></div>
                    <div class="des">

                        <p class="para"><b>Total Number of Students</b></p>
                        <p class="para"> <?php

                                            // Servername
                                            $servername = "localhost";

                                            // Username
                                            $username = "root";

                                            // Empty password
                                            $password = "";

                                            // Database name
                                            $dbname = "attendance_system";

                                            // Create connection by passing these
                                            // connection parameters
                                            $conn = new mysqli(
                                                $servername,
                                                $username,
                                                $password,
                                                $dbname
                                            );

                                            // SQL query to find total count
                                            // of college_data table
                                            $sql = "SELECT count(*) FROM std_reg ";
                                            $result = $conn->query($sql);

                                            // Display data on web page
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<b>" . $row['count(*)'] . "</b>";
                                                echo "<br />";
                                            }

                                            // Close the connection
                                            $conn->close();

                                            ?></p>
                        <button class="button2">More Information...</button>
                    </div>
                </div>

                <!--cards-->
                <div class="card3" style="background-image: url('images/homepage_banner.jpg');">
                    <div class="des">

                        <h3 class="para_banner"><b>Facial Attendance System</b></h3>
                        <p class="para_banner_2">It's "<b>Beyond</b>" Traditional Classroom Attendance</p>
                    </div>
                </div>

                <div>
                    <p class="desc">
                        <b>Facial Attendance System</b> lets you keep an attendance track of all your students. It is beneficial for educators as it helps them to monitor learners entire activities accurately. In Offline attendance, attendance is marked in traditional way using attendance register books
                    </p>
                </div>

                <!--cards-->
                <div class="card4">
                    <div class="des">
                        <div class="line2">

                            <h3 class="para_banner_3"><b>OUR</b> <b style="color: purple;">ATTENDANCE SYSTEM</b> <b>CAN LOOK INTO</b></h3>
                        </div>




                        <!--cards inside-->
                        <div class="card5">
                            <div class="title">
                                <img src="images/icons1.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Students login <br>and logout</p>
                            </div>
                        </div>

                        <!--cards inside-->
                        <div class="card6">
                            <div class="title">
                                <img src="images/icons2.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Interruptions or breaks taken <br>by student</p>
                            </div>
                        </div>

                        <!--cards inside-->
                        <div class="card7">
                            <div class="title">
                                <img src="images/icons3.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Marking attendance of both faculties and students</p>
                            </div>
                        </div>

                        <!--cards inside-->
                        <div class="card8">
                            <div class="title">
                                <img src="images/icons4.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Viewing attendance of both faculties and students</p>
                            </div>
                        </div>

                        <!--cards inside-->
                        <div class="card9">
                            <div class="title">
                                <img src="images/icons1.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Faculty login <br>and logout</p>
                            </div>
                        </div>

                        <!--cards inside-->
                        <div class="card10">
                            <div class="title">
                                <img src="images/icons1.png" style="margin-left:110px; margin-top:30px;">
                            </div>

                            <div class="des">

                                <p class="para_card5">Admin login <br>and logout</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Roadmap -->
                <div class="line2">

                    <h3 class="para_banner_3"><b style="color: purple;">HOW IT WORKS?</b></h3>
                </div>

                <div class="title">
                    <center><img src="images/home_roadmap.png" style="margin-left:110px; margin-top:10px; margin-bottom: 30px;"></center>
                </div>


                <!--cards-->
                <div style="margin-left: 370px; background-image: url('images/home_keyboard.jpg'); background-repeat: no-repeat; background-size: cover; display: inline-block; box-shadow: 2px 2px 10px black; background-color: black; border-radius: 10px; margin-top: 15px; margin-bottom: 15px;">
                    <div class="des">

                        <h3 class="para_banner_4">SO, WHAT ARE YOU WAITING FOR?</h3>
                        <p class="para_banner_5">GRAB OUR SERVICES ASAP!</p>
                        <p class="para_banner_6">If you are a student, register to enjoy our Features!</p>
                        <center><button class="button3" onclick="window.location.href='http://localhost/Attendance_System/std_reg_1.php'">Register Now</button></center>
                    </div>
                </div>


            </div>






            <!-- Footer -->

            <footer class="footer">
                <div class="footer__addr">
                    <h1 class="footer__logo">Something</h1>
                    <!--footer logo-->

                    <h2 style="font-weight: 400; font-size: 15px; color: #fff; font-size: larger; text-decoration: underline;"><b>Contact</b></h2>

                    <address>
                        5534 Somewhere In. The World 22193-10212<br>

                        <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
                    </address>
                </div>

                <ul class="footer__nav">

                    <li class="nav__item nav__item--extra">
                        <h2 class="nav__title"><b>Technology</b></h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">About Us</a>
                            </li>

                            <li>
                                <a href="#">Feedback</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <div class="line3"></div>

                <div class="legal">
                    <p class="para">&copy;Site is designed and hosted by Mugiwara</p>
                </div>
            </footer>
        </div>


        <!-- sidenav -->
        <div class="sidebar">
            <ul>
                <li id="activated">Dashboard</li>
                <li>Admin</li>
                <li>Faculty</li>
                <li>Student</li>
                <li><a href="http://localhost/Attendance_System/login.php">Login</a></li>
                <li><a href="http://localhost/Attendance_System/std_reg_1.php">Registration</a></li>
                <li>FAQ ?</li>
            </ul>
        </div>
    </div>
</body>

</html>