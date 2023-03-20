<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="std_reg_2.css">
</head>

<body>
    <!--card-->
    <div class="card">

    <div class="title">
        <h3 style="display:flex; gap: 1px;">
                    <img src="images/login.svg" alt="" width="50px" height="50px" style="margin-left: 500px;"> <p style="margin-top: 10px; font-size:20px">Registration Page</p>
</h3>
        </div>
        <form method="POST" action="std_reg_2_php.php">

            <!-- php code -->
            <?php

            // receiver side
            session_start();
            $class_value = $_SESSION['class'];
            $div_value = $_SESSION['div'];

            echo "<div class=\"content\">

<div class=\"content_left\">

  <p class=\"label\">UID</p>
  <p><input type=\"text\" name=\"std_uid\" placeholder=\"00000\" required></p>

  <p class=\"label\">Name</p>
  <p><input type=\"text\" name=\"std_name\" required></p>

  <p class=\"label\">Class</p>
  <p><input type=\"text\" name=\"std_class\" value=" . $class_value . " required></p>

  <p class=\"label\">Division</p>
  <p><input type=\"text\" name=\"std_div\" value=" . $div_value . " required></p>



  <div class=\"line3\"></div>

  <div class=\"content_left\">
    <a href='login.php'><input type=\"button\" value=\"Login Page\" class=\"btn_red\" name=\"btn_log\"></a>
  </div>
  <!--with (icon right side arrow)-->

  <div class=\"content_left2\">
  <a href='std_reg_1.php'><input type=\"button\" value=\"Back to Registration Page 1\" class=\"btn_red_2\" name=\"btn_reg_back\"></a>
  </div>
  <!--with (icon right side arrow)-->


</div>

<div class=\"content_right\">

  <p class=\"label1\">Phone Number</p>
  <p><input type=\"tel\" name=\"std_pnumber\" oninvalid=\"alert('Phone Number must contain 10 digits');\" placeholder=\"0000000000\" pattern=\"[0-9]{10}\" required></p>

  <p class=\"label1\">Password</p>
  <p><input type=\"password\" name=\"std_pass\" oninvalid=\"alert('Password must contain 4 or more characters');\" pattern=\".{4,}\" required></p>


  <p class=\"label1\">Confirm Password</p>
  <p><input type=\"Password\" name=\"std_cpass\" oninvalid=\"alert('Password must contain 4 or more characters');\" pattern=\".{4,}\" required></p>

  <p class=\"label\">Email</p>
  <p><input type=\"email\" name=\"std_email\" required></p>

  <div class=\"line4\"></div>

  <div class=\"content_right\">
    <input type=\"submit\" value=\"Save and Continue\" class=\"btn_green\" name=\"btn_reg\">
    <!--with (icon right side arrow)-->
  </div>

</div>

</div>"

            ?>


        </form>

        <div class="copyright">
            &copy;Site is designed and hosted by Mugiwara
        </div>
    </div>
    </div>
</body>

</html>