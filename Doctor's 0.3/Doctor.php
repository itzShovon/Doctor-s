<?php
    session_start();
    include("DoctorConnect.php");
    $_SESSION['sector'] = "doctors";
    $_SESSION['city'] = "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Doctor Page...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DocumentStyle.css">
</head>

<body>
    <div class="Header" id="Header">
        <div class="header" id="header">
            <div class="header_left" id="header_left">
                <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
                <?php
//                    session_start();
                    if($_SESSION['login_flag'] == 1){
                ?>
                    <a class="user_info_action" href="SignOut.php">Logout</a>
                <?php
                    }
                ?>
                <?php
                    if($_SESSION['login_flag'] == 0){
                ?>
                    <a href="Sign.php">Sign In/Up</a>
                <?php } ?>
            </div>
            <div class="header_right" id="header_right">
                <form name="search_form" method="post" action="GuestDocument.php?mode=0&id=0" enctype="multipart/form-data">
                    <input class="doctor_name" id="doctor_name" name="keyword" type="text" placeholder="Search by Doctor Name." autofocus>
                    <button type="submit" name="user_submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_left" id="middle_left">
            <?php
                if($view_mode == 0){
            ?>
                <div class="doctor_list" id="doctor_list">
                    <?php foreach($result as $row){ ?>
                    <div><a href="Doctor.php?id=<?php echo $row->doctor_no; ?>">
                        <?php echo $row->doctor_name; ?>
                        <?php echo ', '; ?>
                        <?php echo $row->doctor_job; ?>
                    </a></div>
                    <?php } ?>
                </div>
            <?php
                }
                else{
            ?>
            <?php foreach($result as $row)
                if($row->doctor_no == $user_ID){
            ?>
                <div class="doctor_info" id="doctor_info">
                    <div class="doctor_info_left" id="doctor_info_left">
                        <?php if($row->doctor_picture != ""){ ?>
                            <img src='Data/Images/Doctor/<?php echo $row->doctor_picture; ?>' alt="Doctors Photo" height="42" width="42">
                        <?php }else{ ?>
                            <img src='Data/Images/Doctor/Doctor%20Profile.png' alt="Doctors Photo" height="42" width="42">
                        <?php } ?>
                        <?php
                            echo "<h3>$row->doctor_name</h3>";
                            echo "<h5>$row->doctor_degree[$row->doctor_job]</h5>";
                        ?>
                    </div>
                    <div class="doctor_info_right" id="doctor_info_right">
                        <?php
                            echo "<p>Rating: $row->doctor_rating</p>";
                            echo "<p>Location: $row->doctor_region, $row->doctor_city</p>";
                            echo "<p>Sector: $row->doctor_sector[$row->doctor_degree]</p>";
                            echo "<p>Works at: $row->doctor_job</p>";
                            echo "<p>Contact:</p>";
                            echo "<p>Phone: $row->doctor_phone</p>";
                            echo "<p>E-Mail: $row->doctor_email</p>";
                        ?>
                    </div>
                    <?php
                        if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode']) == 1){
                    ?>
                        <a class="user_info_action" href="Delete.php">Delete</a>
                        <a class="user_info_action" href="Update.php">Update</a>
                    <?php
                        }
                    ?>
                </div>
            <?php
                }
            }
            ?>
        </div>
        
        
        <?php
//            if($_SESSION['login_flag'] != 1)
                include 'MiddleRight.php';
        ?>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>