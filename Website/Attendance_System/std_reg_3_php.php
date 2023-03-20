<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $std_uid = $_POST['std_uid'];
    $std_class = $_POST['std_class'];
    $std_div = $_POST['std_div'];
    $url1 = $_POST['url1'];
    $url2 = $_POST['url2'];
    $url3 = $_POST['url3'];
    $url4 = $_POST['url4'];
    $url5 = $_POST['url5'];
    $url6 = $_POST['url6'];
    $url7 = $_POST['url7'];
    $url8 = $_POST['url8'];
    $url9 = $_POST['url9'];
    $url10 = $_POST['url10'];

    $uid_db1 = $std_uid . "_" . $std_class . "_" . $std_div . ",1";
    $uid_db2 = $std_uid . "_" . $std_class . "_" . $std_div . ",2";
    $uid_db3 = $std_uid . "_" . $std_class . "_" . $std_div . ",3";
    $uid_db4 = $std_uid . "_" . $std_class . "_" . $std_div . ",4";
    $uid_db5 = $std_uid . "_" . $std_class . "_" . $std_div . ",5";
    $uid_db6 = $std_uid . "_" . $std_class . "_" . $std_div . ",6";
    $uid_db7 = $std_uid . "_" . $std_class . "_" . $std_div . ",7";
    $uid_db8 = $std_uid . "_" . $std_class . "_" . $std_div . ",8";
    $uid_db9 = $std_uid . "_" . $std_class . "_" . $std_div . ",9";
    $uid_db10 = $std_uid . "_" . $std_class . "_" . $std_div . ",10";


    $conn = new mysqli('localhost', 'root', '', 'attendance_system');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt1 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt1->bind_param("ss", $uid_db1, $url1);
        $stmt1->execute();
        $stmt1->close();

        $stmt2 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt2->bind_param("ss", $uid_db2, $url2);
        $stmt2->execute();
        $stmt2->close();

        $stmt3 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt3->bind_param("ss", $uid_db3, $url3);
        $stmt3->execute();
        $stmt3->close();

        $stmt4 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt4->bind_param("ss", $uid_db4, $url4);
        $stmt4->execute();
        $stmt4->close();

        $stmt5 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt5->bind_param("ss", $uid_db5, $url5);
        $stmt5->execute();
        $stmt5->close();

        $stmt6 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt6->bind_param("ss", $uid_db6, $url6);
        $stmt6->execute();
        $stmt6->close();

        $stmt7 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt7->bind_param("ss", $uid_db7, $url7);
        $stmt7->execute();

        $stmt8 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt8->bind_param("ss", $uid_db8, $url8);
        $stmt8->execute();
        $stmt8->close();

        $stmt9 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt9->bind_param("ss", $uid_db9, $url9);
        $stmt9->execute();
        $stmt9->close();

        $stmt10 = $conn->prepare("insert into std__face_reg values(?,?)");
        $stmt10->bind_param("ss", $uid_db10, $url10);
        $stmt10->execute();
        $stmt10->close();

        header('location: login.php');
        die();

        $conn->close();
    }


    ?>
</body>

</html>