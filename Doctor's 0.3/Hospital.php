<?php
    include("HospitalConnect.php");
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
                    session_start();
                    if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode']) == 1){
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
                <form name="search_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <input class="hospital_name" id="hospital_name" name="hospital_name" type="text" placeholder="Search by Hospital Name." autofocus>
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
                    <div><a href="Hospital.php?id=<?php echo $row->hospital_no; ?>">
                        <?php echo $row->hospital_name; ?>
                        <?php echo ', '; ?>
                        <?php echo $row->hospital_city; ?>
                    </a></div>
                    <?php } ?>
                </div>
            <?php
                }
                else{
            ?>
            <?php foreach($result as $row)
                if($row->hospital_no == $user_ID){
            ?>
                <div class="doctor_info" id="doctor_info">
                    <div class="doctor_info_left" id="doctor_info_left">
                        <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Hospital's Photo" height="42" width="42">
                        <?php
                            echo "<h3>$row->hospital_name</h3>";
                            echo "<h5>$row->hospital_city [$row->hospital_region]</h5>";
                        ?>
                    </div>
                    <div class="doctor_info_right" id="doctor_info_right">
                        <?php
                            echo "<p>Rating: $row->hospital_rating</p>";
                            echo "<p>Location: $row->hospital_region, $row->hospital_city</p>";
                            echo "<p>Contact:</p>";
                            echo "<p>Phone: $row->hospital_phone</p>";
                            echo "<p>E-Mail: $row->hospital_email</p>";
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
        
        <?php include 'MiddleRight.php' ?>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>