<!DOCTYPE html>
<html>

<head>
    <title>Admin...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/Sign_Style.css">
    <script src="Data/JQ/jquery.min.js"></script>
    <script src="Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
        <?php
            session_start();
            if($_SESSION['login_flag'] != 1 || $_SESSION['login_mode'] != "1")
                $_SESSION['login_flag'] = 0;
            else if($_SESSION['login_flag'] == 1 && $_SESSION['login_mode'] == "1"){
                echo '<a href="SignOut.php">Sign Out</a>';
                echo '<a href="AdminDocument.php?id=0&mode=0">Document</a>';
            }
            else{
                echo "<script type='text/javascript'>alert('Something wrong... Try again later...')</script>";
            }
        ?>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_up" id="middle_up">
            <?php
//                if($_SESSION['login_flag'] != 1){
            ?>
            <a class="middle_up_signin" id="middle_up_signin">Sign In</a>
            <?php
//                }
            ?>
            
            <?php
                if($_SESSION['login_flag'] == 1 && $_SESSION['login_mode'] == "1"){
            ?>
                <a class="middle_up_update" id="middle_up_update">Update Password</a>
            <?php
                }
            ?>
        </div>
        <div class="middle_body" id="middle_body">
            <?php
//                if($_SESSION['login_flag'] != 1){
            ?>
            <div class="middle_body_signin" id="middle_body_signin">
                <?php include 'AdminIn.php' ?>
            </div>
            <?php
//                }
            ?>
            
            <?php
                if($_SESSION['login_flag'] == 1 && $_SESSION['login_mode'] == "1"){
            ?>
                <div class="middle_body_update" id="middle_body_update">
                    <?php include 'AdminUp.php' ?>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="Footer" id="Footer"></div>
</body>

</html>