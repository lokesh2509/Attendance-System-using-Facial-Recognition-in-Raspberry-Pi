<?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "attendance_system";  
      
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}   
$username = $_POST['username'];  
$password = $_POST['pass'];  
$log_opt = $_POST['log_opt'];  

$username = stripcslashes($username);  
$password = stripcslashes($password);  

$username = mysqli_real_escape_string($con, $username);  
$password = mysqli_real_escape_string($con, $password);  




if ($log_opt == "Admin"){
    $sql = "select *from adm_reg where adm_id = '$username' and pass = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    
    if($count == 1){  
        // echo "Passed";
        session_start();
                
        $_SESSION['adm_id']=$row["adm_id"];
        header('location: profile_adm.php');
        header('location: adm_home.php');
        die(); 
    }  
    else{  
        echo "Failed";
        // header('location: login.php');
        die(); 
    }     
}

elseif ($log_opt == "Faculty"){
    $sql = "select *from fac_reg where fac_id = '$username' and pass = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    
    if($count == 1){  
        // echo "Passed";
        session_start();
                
        $_SESSION['fac_id']=$row["fac_id"];
        header('location: profile_fac.php');
        header('location: fac_home.php');
        die(); 
    }  
    else{  
        echo "Failed";
        // header('location: Student_Login2.php');
        die(); 
    }     
}

elseif ($log_opt == "Student"){
    $sql = "select *from std_reg where uid = '$username' and pass = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    
    if($count == 1){  
        // echo "Passed";
        session_start();
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['uname']=$row["name"];
        header('location: profile_std.php');
        header('location: view_atd_std.php');
        header('location: std_home.php');
        die(); 
    }  
    else{  
        echo "Failed";
        // header('location: Student_Login2.php');
        die(); 
    }     
}
