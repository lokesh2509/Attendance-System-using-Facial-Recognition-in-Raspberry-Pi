<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!--card-->
    <div class="card">

        <div class="title">
        <h3 style="display:flex; gap: 1px;">
                    <img src="images/login.svg" alt="" width="50px" height="50px" style="margin-left: 300px;"> <p style="margin-top: 10px; font-size:20px">Login Page</p>
</h3>
        </div>

        <form method="POST" action="login_php.php">
            <div class="content">

                <div class="content_left">

                    <p class="label">UID</p>
                    <p><input type="text" name="username" placeholder="00000" required></p>

                    <p class="label1">Password</p>
                    <p><input type="password" name="pass" oninvalid="alert('Password must contain 4 or more characters');" pattern=".{4,}" required></p>

                    <p class="label1">
                        <input type="radio" name="log_opt" value="Admin"> Admin <br>
                        <input type="radio" name="log_opt" value="Faculty"> Faculty <br>
                        <input type="radio" name="log_opt" value="Student"> Student <br>
                    </p>




                    <div class="line3"></div>
                    <!--with (icon right side arrow)-->

                    <div class="btn">
                        <div class="content_left">
                            <a href='std_reg_1.php'><input type="button" value="Registration (Student)" class="btn_red" name="btn_reg_back"></a>
                        </div>

                        <div class="content_right">
                            <input type="submit" value="Login" class="btn_green" name="btn_reg">
                            <!--with (icon right side arrow)-->
                        </div>
                    </div>


                </div>

            </div>


        </form>

        <div class="copyright">
            &copy;Site is designed and hosted by Mugiwara
        </div>
    </div>
    </div>
</body>

</html>