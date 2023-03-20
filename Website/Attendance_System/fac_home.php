<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Faculty Home Page</title>
        <style type="text/css">
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial;
                padding: 10px;
                background: #f1f1f1;
            }

            .header {
                padding: 30px;
                text-align: center;
                background: white;
            }

            .heading{
                padding: 30px;
                text-align: center;
                background: white;
            }

            .heading1{
                padding: 30px;
                text-align: center;
                background: white;
                color: #ff6633;
            }

            .heading h1 {
                font-size: 50px;
            }


            .heading h5{
                font-size: 30px;
            }

            .heading1 h5{
                font-size: 30px;
            }

            .topnav {
                overflow: hidden;
                background-color: #333;
            }


            .topnav a {
                float: right;
                display: block;
                color: #ff6633;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }


            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }


        </style>
    </head>
    <body>
        <div class="header">
            <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
        </div>

        <div class="topnav">
            <a href="Feedback.html">Feedback</a><!--Feedback page-->
            <a href="About_Us.html">About US</a><!--About Team Page-->
            <a href="profile_fac.php">Profile</a><!--Faculty Profile Page-->
            <a href="home_page.php">Home</a><!--Home page-->
        </div>
    <center>

        <h1 style="color: blue; font-family: Times New Roman;"><u>Faculty Home Page</u></h1>
        <h5>Welcome to the Faculty</h5>

    </center>



    <center>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <center><img src="images\student.png" alt="..." width="100">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Student Attendance</h5>
                        <a href="give_atd_std_1.html" class="btn btn-primary">Give Attendance</a>
                    </div>
                </div>
                <br>

                <div class="card">
                    <center><img src="images\student.png" alt="..." width="100">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Student Attendance</h5>
                        <a href="edit_atd.html" class="btn btn-primary">Edit Attendance</a>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-sm-6">


                <div class="card">
                    <center><img src="images\student.png" alt="..."  width="100">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Student Attendance</h5>
                        <a href="view_atd.html" class="btn btn-primary">View Attendance</a>
                    </div>
                </div>
                <br>

                <div class="card">
                    <center><img src="images\teacher.png" alt="..."  width="120">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Own Attendance (Faculty Attendance)</h5>
                        <a href="view_fac_atd.php" class="btn btn-primary">View Attendance</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</center>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>