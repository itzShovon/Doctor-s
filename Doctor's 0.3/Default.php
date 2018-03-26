<?php
    session_start();
    $_SESSION['admin_name'] = "";
//    $_SESSION['admin_no'] = "0";
    $_SESSION['admin_password'] = "";
    $_SESSION['login_mode'] = "0";
    $_SESSION['login_flag'] = "0";
    $_SESSION['login_user'] = "0";
    $_SESSION['city'] = "";
    $_SESSION['name'] = "";
    $_SESSION['sector'] = "";

//        login mode info(Admin = 1, doctor = 2, hospital = 3, blood donor = 4)

    header('Location: Home.php');
//    include 'Home.php';
?>