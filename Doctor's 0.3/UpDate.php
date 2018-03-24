<?php
    include("UpdateConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Page...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
    <script src="Data/JQ/jquery.min.js"></script>
    <script src="Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
        <a href="Delete.php">Delete Account</a>
        <a href="SignOut.php">Log Out</a>
        <a class="update_account_event" id="update_account_event">Update Account</a>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_left account_info" id="middle_left account_info">
            <h4>Doctors</h4>
            <?php if($login_mode == 2){ ?>
                <?php foreach($result1 as $row)
                    if($row->doctor_no == $login_user){
                ?>
                    <div class="user_info" id="user_info">
                        <div class="user_info_left" id="user_info_left">
                            <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                            <?php
                                echo "<h3>$row->doctor_name</h3>";
                                echo "<h5>$row->doctor_degree[$row->doctor_job]</h5>";
                            ?>
                        </div>
                        <div class="user_info_right" id="user_info_right">
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
                    </div>
                <?php } ?>
            <?php } ?>

            <h4>Hospitals</h4>
            <?php if($login_mode == 3){ ?>
                <?php foreach($result2 as $row)
                    if($row->hospital_no == $login_user){
                ?>
                    <div class="user_info" id="user_info">
                        <div class="user_info_left" id="user_info_left">
                            <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Hospital's Photo" height="42" width="42">
                            <?php
                                echo "<h3>$row->hospital_name</h3>";
                                echo "<h5>$row->hospital_city [$row->hospital_region]</h5>";
                            ?>
                        </div>
                        <div class="user_info_right" id="user_info_right">
                            <?php
                                echo "<p>Rating: $row->hospital_rating</p>";
                                echo "<p>Location: $row->hospital_region, $row->hospital_city</p>";
                                echo "<p>Contact:</p>";
                                echo "<p>Phone: $row->hospital_phone</p>";
                                echo "<p>E-Mail: $row->hospital_email</p>";
                            ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <h4>Blood Donors</h4>
            <?php if($login_mode == 4){ ?>
                <?php foreach($result3 as $row)
                    if($row->blood_donor_no == $login_user){
                ?>
                    <div class="user_info" id="user_info">
                        <div class="user_info_left" id="user_info_left">
                            <img src="Data/Images/Doctor/Doctor%20Profile.png" alt="Doctor's Photo" height="42" width="42">
                            <?php
                                echo "<h3>$row->blood_donor_name</h3>";
                                echo "<h5>$row->blood_donor_job[$row->blood_donor_city]</h5>";
                            ?>
                        </div>
                        <div class="user_info_right" id="user_info_right">
                            <?php
                                echo "<p>Rating: $row->blood_donor_rating</p>";
                                echo "<p>Location: $row->blood_donor_region, $row->blood_donor_city</p>";
                                echo "<p>Works at: $row->blood_donor_job</p>";
                                echo "<p>Contact:</p>";
                                echo "<p>Phone: $row->blood_donor_phone</p>";
                                echo "<p>E-Mail: $row->blood_donor_email</p>";
                            ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="update_account" id="update_account">
            
                        <form name="update_account_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <th>User Name</th>
                                    <td><input class="user_name" id="user_name" name="user_name" type="text" placeholder="User Name" autofocus></td>
                                </tr>
                                <tr>
                                    <th>User E-Mail</th>
                                    <td><input class="user_email" id="user_email" name="user_email" type="email" placeholder="User E-mail"></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td><input class="user_password" id="user_password" name="user_password" type="password" placeholder="User Password"></td>
                                </tr>
                                <tr>
                                    <th>Conform Password</th>
                                    <td><input class="temp_password" id="temp_password" name="temp_password" type="password" placeholder="Conform Password"></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td><input class="user_city" id="user_city" name="user_city" type="text" placeholder="City"></td>
                                </tr>
                                <tr>
                                    <th>Region</th>
                                    <td><input class="user_region" id="user_region" name="user_region" type="text" placeholder="Region"></td>
                                </tr>
                                <tr>
                                    <th>Phone No.</th>
                                    <td><input class="user_phone" id="user_phone" name="user_phone" type="text" placeholder="Phone No."></td>
                                </tr>
                                <tr>
                                    <td><button type="reset">Reset</button></td>
                                    <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                                </tr>
                            </table>
                        </form>
        </div>
        
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>