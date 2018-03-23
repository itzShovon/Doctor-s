<?php
    session_start();
    $_SESSION['admin_name'] = "";
//    $_SESSION['admin_no'] = "0";
    $_SESSION['admin_password'] = "";
    $_SESSION['login_mode'] = "0";
    $_SESSION['login_flag'] = "0";
    $_SESSION['login_user'] = "0";

//        login mode info(Admin = 1, doctor = 2, hospital = 3, blood donor = 4)

    include 'Home.php';
?>