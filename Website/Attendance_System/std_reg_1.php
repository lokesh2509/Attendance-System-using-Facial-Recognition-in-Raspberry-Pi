<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="std_reg_1.css">
</head>

<body>
    <!--card-->
    <div class="card">

    <div class="title">
        <h3 style="display:flex; gap: 1px;">
                    <img src="images/login.svg" alt="" width="50px" height="50px" style="margin-left: 300px;"> <p style="margin-top: 10px; font-size:20px">Registration Page</p>
</h3>
        </div>
        <form method="POST" action="std_reg_1_php.php">

            <div class="content">

                <div class="content_left">

                    <p class="label">Class</p>
                    <p>
                        <select name="std_class">
                            <option hidden selected>--Select a class--</option>
                            <option value="bsc"> B.Sc.
                            </option>
                            <option value="bsccs"> B.Sc. (Computer Science)
                            </option>
                            <option value="bscit"> B.Sc. (Information Technology)
                            </option>
                            <option value="bscbio"> B.Sc. (Biotechnology)
                            </option>
                            <option value="bscavi"> B.Sc. (Aviation)
                            </option>
                            <option value="bscds"> B.Sc. (Data Science)
                            </option>
                            <option value="bscas"> B.Sc. (Actuarial Science)
                            </option>
                            <option value="bcom"> B.Com.
                            </option>
                            <option value="bcomaf"> B.Com. (Accounting & Finance)
                            </option>
                            <option value="bcombi"> B.Com. (Banking & Insurance)
                            </option>
                            <option value="bcomfm"> B.Com. (Financial Management)
                            </option>
                            <option value="bcomim"> B.Com. (Investment Management)
                            </option>
                            <option value="bcomas"> B.Com. (Actuarial Studies)
                            </option>
                            <option value="bms"> B.Management Studies
                            </option>
                            <option value="bmm"> B.A. (Mass Media)
                            </option>
                        </select>
                    </p>

                    <div class="line3"></div>

                    <div class="content_left">
                        <a href="login.php"><input type="button" value="Back to Login Page" class="btn_red"></a>
                    </div>
                    <!--with (icon right side arrow)-->


                </div>

                <div class="content_right">


                    <p class="label">Division</p>
                    <p>
                        <select name="std_div">
                            <option hidden selected>--Select a division--</option>
                            <option value="A"> A
                            </option>
                            <option value="B"> B
                            </option>
                            <option value="C"> C
                            </option>
                        </select>
                    </p>

                    <div class="line4"></div>

                    <div class="content_right">
                        <input type="submit" value="Save and Continue" class="btn_green">
                        <!--with (icon right side arrow)-->
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