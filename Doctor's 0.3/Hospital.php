<!DOCTYPE html>
<html>

<head>
    <title>Hospital Page...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DocumentStyle.css">
</head>

<body>
    <div class="Header" id="Header">
        <div class="header" id="header">
            <div class="header_left" id="header_left">
                <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
                <a href="Sign.php">Sign In/Up</a>
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
            <div class="doctor_list" id="doctor_list">
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
                <div><a href="#">Mr. sdjfidjf, fdjdjfajd</a></div>
            </div>
            <div class="doctor_info" id="doctor_info">
                <div class="doctor_info_left" id="doctor_info_left">
                    <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                    <h3>Mr. ldkjfiefnldfnm difnelll</h3>
                    <h5>M.B.B.S.[ldfi dlkjfiejldfn jdifjel flsdj djif]</h5>
                </div>
                <div class="doctor_info_right" id="doctor_info_right">
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Available: 2:00AM to 5:PM[dlfije dfjijel fiaeje dfiej dfj]</p>
                    <p>Address: dfjienldfjdlifj 2/3road dfjiendfidjfle</p>
                    <p>Phone: 08464684156454686</p>
                    <p>E-mail: jdifjleafjaidjfldjkf@dfjidjf.com</p>
                    <p>Facebook: facebook.com/jdfiejljljfldjfiejdkfj</p>
                </div>
            </div>
        </div>
        <?php include 'MiddleRight.php' ?>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>