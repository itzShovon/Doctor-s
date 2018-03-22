<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/HeaderStyle.css">
</head>

<body>
    <div class="headerX" id="headerX">
        <div class="header" id="header">
            <div class="header_part1" id="header_part1">
                <div class="header_part1_left" id="header_part1_left">
                    <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
                </div>
                <div class="header_part1_right" id="header_part1_right">
<!--                    <a href="Doctor.php">Doctor</a>-->
<!--                    <a href="Hospital.php">Hospital</a>-->
<!--                    <a href="Blood%20Donor.php">Blood Donor</a>-->
                    <a href="Sign.php">Sign In/Up</a>
                </div>
            </div>
            <div class="header_part2" id="header_part2">
                <h2>Doctor's</h2>
                <br>
                <h5>To simplify your healthcare system...</h5>
            </div>
            <div class="header_part3" id="header_part3">
                <form name="header_search" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
<!--                    <input list="sector" name="sector" placeholder="Select a sector">-->
<!--                    <datalist id="sector">-->
                    <select>
                        <option value="Doctor">Doctor</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Blood Donor">Blood Donor</option>
                    </select>
<!--                    </datalist>-->
                    
                    <input list="location" name="location" placeholder="Select a Location">
                    <datalist id="location">
                        <option value="Dhaka">
                        <option value="Rajshahi">
                        <option value="Nator">
                        <option value="Chapai">
                        <option value="Rangpur">
                        <option value="Dinajpur">
                    </datalist>
                    
                    <input type="text" name="keyword" class="keyword" id="keyword" placeholder="Keyword" autofocus>
                    <button type="submit" value="Search" name="header_search" class="header_search" id="header_search">Search</button>
                </form>
            </div>
            <div class="header_part4" id="header_part4">
                <hr>
                <a href="Doctor.php" class="doctor_service" id="doctor_service" title="Doctor Service"><img src="Data/Images/Doctor/Doctor_Service.png" alt="Doctor's" height="42" width="42"></a>
                <a href="Hospital.php" title="Hospital Service" class="hospital_service" id="hospital_service"><img src="Data/Images/Hospital/Hospital_Service.png" alt="Doctor's" height="42" width="42"></a>
                <a href="Blood%20Donor.php" title="Blood Donor Center" class="blood_donor_service" id="blood_donor_service"><img src="Data/Images/Blood_Donor/Blood_Donor_Service.png" alt="Doctor's" height="42" width="42"></a>
            </div>
        </div>
    </div>
</body>

</html>