<?php
    include("AdminDocumentConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Document Page...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
</head>

<body>
    <div class="Header" id="Header">
        <div class="header" id="header">
            <div class="header_left" id="header_left">
                <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
                <a href="Admin.php">Back</a>
<!--                <a href="AdminUpdate.php">Update Password</a>-->
                <a href="SignOut.php">Sign Out</a>
            </div>
            <div class="header_right" id="header_right">
                <form name="search_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <input class="user_name" id="user_name" name="user_name" type="text" placeholder="Search by Name." autofocus>
                    <button type="submit" name="user_submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_left" id="middle_left">
            <div class="user_list" id="user_list">
                <h4>Doctors</h4>
                <?php foreach($result1 as $row){ ?>
                <div><a href="AdminDocument.php?id=<?php echo $row->doctor_no; ?>">
                    <?php echo $row->doctor_name ?>
                    <?php echo ', '; ?>
                    <?php echo $row->doctor_job; ?>
                </a></div>
                <?php } ?>
                
                
                
<!--
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
-->
                
                <h4>Hospitals</h4>
                <?php foreach($result2 as $row){ ?>
                <div><a href="AdminDocument.php?id=<?php echo $row->hospital_no; ?>">
                    <?php echo $row->hospital_name ?>
                    <?php echo ', '; ?>
                    <?php echo $row->hospital_city; ?>
                </a></div>
                <?php } ?>
                
<!--
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
-->
                
                <h4>Blood Donors</h4>
                <?php foreach($result3 as $row){ ?>
                <div><a href="AdminDocument.php?id=<?php echo $row->blood_donor_no; ?>">
                    <?php echo $row->blood_donor_name; ?>
                    <?php echo ', '; ?>
                    <?php echo $row->blood_donor_job; ?>
                </a></div>
                <?php } ?>
                
<!--
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
-->
            </div>
            <h4>Doctors</h4>
            <div class="user_info" id="user_info">
                <div class="user_info_left" id="user_info_left">
                    <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                    <h3>Mr. ldkjfiefnldfnm difnelll</h3>
                    <h5>M.B.B.S.[ldfi dlkjfiejldfn jdifjel flsdj djif]</h5>
                </div>
                <div class="user_info_right" id="user_info_right">
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Address: dfjienldfjdlifj 2/3road dfjiendfidjfle</p>
                    <p>Phone: 08464684156454686</p>
                    <p>E-mail: jdifjleafjaidjfldjkf@dfjidjf.com</p>
                    <p>Facebook: facebook.com/jdfiejljljfldjfiejdkfj</p>
                </div>
                <a class="user_info_action" href="AdminDelete.php">Delete</a>
                <a class="user_info_action" href="AdminUpdate.php">Update</a>
            </div>
            <h4>Hospitals</h4>
            <div class="user_info" id="user_info">
                <div class="user_info_left" id="user_info_left">
                    <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                    <h3>Mr. ldkjfiefnldfnm difnelll</h3>
                    <h5>M.B.B.S.[ldfi dlkjfiejldfn jdifjel flsdj djif]</h5>
                </div>
                <div class="user_info_right" id="user_info_right">
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Address: dfjienldfjdlifj 2/3road dfjiendfidjfle</p>
                    <p>Phone: 08464684156454686</p>
                    <p>E-mail: jdifjleafjaidjfldjkf@dfjidjf.com</p>
                    <p>Facebook: facebook.com/jdfiejljljfldjfiejdkfj</p>
                </div>
                <a class="user_info_action" href="AdminDelete.php">Delete</a>
                <a class="user_info_action" href="AdminUpdate.php">Update</a>
            </div>
            <h4>Blood Donors</h4>
            <div class="user_info" id="user_info">
                <div class="user_info_left" id="user_info_left">
                    <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                    <h3>Mr. ldkjfiefnldfnm difnelll</h3>
                    <h5>M.B.B.S.[ldfi dlkjfiejldfn jdifjel flsdj djif]</h5>
                </div>
                <div class="user_info_right" id="user_info_right">
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Address: dfjienldfjdlifj 2/3road dfjiendfidjfle</p>
                    <p>Phone: 08464684156454686</p>
                    <p>E-mail: jdifjleafjaidjfldjkf@dfjidjf.com</p>
                    <p>Facebook: facebook.com/jdfiejljljfldjfiejdkfj</p>
                </div>
                <a class="user_info_action" href="AdminDelete.php">Delete</a>
                <a class="user_info_action" href="AdminUpdate.php">Update</a>
            </div>
        </div>
        
        <?php include 'MiddleRight.php' ?>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>