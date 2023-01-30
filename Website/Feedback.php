<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Feedback Page- User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Feedback.css">
</head>


<body>

    <?php
    session_start();

    if (isset($_SESSION['Message'])) {
        echo "<script type='text/javascript'>
            alert('" . $_SESSION['Message'] . "');
          </script>";
    }
    ?>

    <div class="header">
        <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">

    </div>
    <div class="topnav">
        <a href="Feedback.php">Feedback</a>
        <!--Feedback page-->
        <a href="About_Us.html">About US</a>
        <!--About Team Page-->
        <a href="#">Profile</a>
        <!--Admin Profile Page-->
        <a href="home_page.php">Home</a>
        <!--Home page-->
    </div>
    <center>
        <h1 style="color: #ff6633; font-family: Times New Roman;"><u>FEEDBACK PAGE</u></h1>
    </center>

    <p class="para">Hello Concerned User! We will be happy to get your feedback about our college.<br><br>

        Thakur College of Science & Commerce aims at holistic development of the User to become responsible citizens of
        the society along with pursuing <br> their entrepreneurships and professionals careers in the disciplines. This
        form has been designed to seek feedback from Users to assist us strengthen the quality teaching-<br>learning
        environment in the college, to assess and to improve academic,non-academic, infrastructure facilities.</p>
    <p class="para"><b>The information provided by you will be kept confidential at all times. It is used strictly to
            communicate with you.</b></p><br><br>
    <center>
        <form method="post" action="Feedback_upload.php" id="f-form">
            <label class="txtbox"> Email address</label><br>
            <input type="text" name="user_email" placeholder="Your email address" class="txtbox" id="txt" required><br><br>
            <label class="txtbox">Name</label><br>
            <input type="text" name="user_name" placeholder="Name" class="txtbox" required><br><br><br>

            <label class="txtbox">1. Admission procedure</label><br>
            <input type="radio" name="radio1" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio1" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio1" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio1" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio1" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">2. Counselling & guidance provided to students</label><br>
            <input type="radio" name="radio2" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio2" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio2" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio2" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio2" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">3. Work culture observed by you and your ward</label><br><br>
            <input type="radio" name="radio3" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio3" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio3" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio3" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio3" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>


            <label class="txtbox">4. College website information & communication in the college</label><br><br>
            <input type="radio" name="radio4" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio4" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio4" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio4" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio4" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">5. Evaluation and feedback mechanism</label><br><br>
            <input type="radio" name="radio5" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio5" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio5" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio5" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio5" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">6. Improvement in soft skills, knowledge & ethics in your ward</label><br><br>
            <input type="radio" name="radio6" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio6" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio6" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio6" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio6" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>


            <label class="txtbox">7. Infrastructure and lab facility</label><br><br>
            <input type="radio" name="radio7" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio7" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio7" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio7" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio7" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>


            <label class="txtbox">8. Syllabus and curriculum</label><br><br>
            <input type="radio" name="radio8" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio8" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio8" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio8" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio8" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">9. Canteen facility</label><br><br>
            <input type="radio" name="radio9" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio9" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio9" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio9" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio9" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <label class="txtbox">10. Placements</label><br><br>
            <input type="radio" name="radio10" value="Excellent" id="excellent">
            <label for="excellent">Excellent</label>
            <input type="radio" name="radio10" value="Verygood" id="verygood">
            <label for="verygood">Very Good</label>
            <input type="radio" name="radio10" value="Good" id="good">
            <label for="good">Good</label>
            <input type="radio" name="radio10" value="Average" id="average">
            <label for="average">Average</label>
            <input type="radio" name="radio10" value="Poor" id="poor">
            <label for="poor">Poor</label><br><br><br>

            <textarea id="textarea" name="txtarea" rows="4" cols="50" placeholder="Any other suggestions you would like to give..." value="Any other suggestions you would like to give...">

            </textarea><br><br>
            <input type="submit" name="submit" value="Submit" class="btn">



        </form>

    </center>