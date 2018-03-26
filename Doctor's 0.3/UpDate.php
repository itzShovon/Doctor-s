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
                            <?php if($row->hospital_picture != ""){ ?>
                                <img src='Data/Images/Hospital/<?php echo $row->hospital_picture; ?>' alt="Hospitals Photo" height="42" width="42">
                            <?php }else{ ?>
                                <img src='Data/Images/Hospital/Hospital%20Profile.png' alt="Hospitals Photo" height="42" width="42">
                            <?php } ?>
                            <?php
                                echo "<h3>$row->hospital_name</h3>";
                                echo "<h5>$row->hospital_city[$row->hospital_region]</h5>";
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
                            <?php if($row->blood_donor_picture != ""){ ?>
                                <img src='Data/Images/Blood_Donor/<?php echo $row->blood_donor_picture; ?>' alt="Doctors Photo" height="42" width="42">
                            <?php }else{ ?>
                                <img src='Data/Images/Blood_Donor/Blood%20Donor%20Profile.png' alt="Blood Donors Photo" height="42" width="42">
                            <?php } ?>
                            <?php
                                echo "<h3>$row->blood_donor_name</h3>";
                                echo "<h5>$row->blood_donor_group</h5>";
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
                <?php if($login_mode == 2){ ?>
                    <?php foreach($result1 as $row)
                        if($row->doctor_no == $login_user){
                    ?>
                        <table>
                            <tr>
                                <th>Doctor's Picture</th>
                                <td><input class="user_picture" id="user_picture" name="doctor_picture" type="file" accept="image/*"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Name</th>
                                <td><input class="user_name" id="user_name" name="doctor_name" type="text" placeholder="Your Name" value="<?php echo $row->doctor_name; ?>" autofocus></td>
                            </tr>
                            <tr>
                                <th>Doctor's E-Mail</th>
                                <td><input class="user_email" id="user_email" name="doctor_email" type="email" placeholder="Your E-mail" value="<?php echo $row->doctor_email; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Password</th>
                                <td><input class="user_password" id="user_password" name="doctor_password" type="password" placeholder="Your Password"></td>
                            </tr>
                            <tr>
                                <th>Conform Password</th>
                                <td><input class="temp_password" id="temp_password" name="doctor_temp_password" type="password" placeholder="Conform Your Password"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Sector</th>
                                <td><input class="user_sector" id="user_sector" name="doctor_sector" type="text" placeholder="Sector" value="<?php echo $row->doctor_sector; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's City</th>
                                <td><input class="user_city" id="user_city" name="doctor_city" type="text" placeholder="Your City" value="<?php echo $row->doctor_city; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Region</th>
                                <td><input class="user_region" id="user_region" name="doctor_region" type="text" placeholder="Your Region" value="<?php echo $row->doctor_region; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Phone No.</th>
                                <td><input class="user_phone" id="user_phone" name="doctor_phone" type="text" placeholder="Your Phone No." value="<?php echo $row->doctor_phone; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Degree</th>
                                <td><input class="user_degree" id="user_degree" name="doctor_degree" type="text" placeholder="Your Degree" value="<?php echo $row->doctor_degree; ?>"></td>
                            </tr>
                            <tr>
                                <th>Doctor's Job</th>
                                <td><input class="user_job" id="user_job" name="doctor_job" type="text" placeholder="Your Job" value="<?php echo $row->doctor_job; ?>"></td>
                            </tr>
<!--
                            <tr>
                                <td><button type="reset">Reset</button></td>
                                <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                            </tr>
-->
                        </table>
                    <?php } ?>
                <?php } ?>
                <?php if($login_mode == 3){ ?>
                    <?php foreach($result2 as $row)
                        if($row->hospital_no == $login_user){
                    ?>
                        <table>
                            <tr>
                                <th>User Name</th>
                                <td><input class="user_name" id="user_name" name="hospital_name" type="text" placeholder="User Name" value="<?php echo $row->hospital_name; ?>" autofocus></td>
                            </tr>
                            <tr>
                                <th>User E-Mail</th>
                                <td><input class="user_email" id="user_email" name="hospital_email" type="email" placeholder="User E-mail" value="<?php echo $row->hospital_email; ?>"></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><input class="user_password" id="user_password" name="hospital_password" type="password" placeholder="User Password"></td>
                            </tr>
                            <tr>
                                <th>Conform Password</th>
                                <td><input class="temp_password" id="temp_password" name="hospital_temp_password" type="password" placeholder="Conform Password"></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><input class="user_city" id="user_city" name="hospital_city" type="text" placeholder="City" value="<?php echo $row->hospital_city; ?>"></td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td><input class="user_region" id="user_region" name="hospital_region" type="text" placeholder="Region" value="<?php echo $row->hospital_region; ?>"></td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td><input class="user_phone" id="user_phone" name="hospital_phone" type="text" placeholder="Phone No." value="<?php echo $row->hospital_phone; ?>"></td>
                            </tr>
<!--
                            <tr>
                                <td><button type="reset">Reset</button></td>
                                <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                            </tr>
-->
                        </table>
                    <?php } ?>
                <?php } ?>
                <?php if($login_mode == 4){ ?>
                    <?php foreach($result3 as $row)
                        if($row->blood_donor_no == $login_user){
                    ?>
                        <table>
                            <tr>
                                <th>User Name</th>
                                <td><input class="user_name" id="user_name" name="blood_donor_name" type="text" placeholder="User Name" value="<?php echo $row->blood_donor_name; ?>" autofocus></td>
                            </tr>
                            <tr>
                                <th>User E-Mail</th>
                                <td><input class="user_email" id="user_email" name="blood_donor_email" type="email" placeholder="User E-mail" value="<?php echo $row->blood_donor_email; ?>"></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><input class="user_password" id="user_password" name="blood_donor_password" type="password" placeholder="User Password"></td>
                            </tr>
                            <tr>
                                <th>Conform Password</th>
                                <td><input class="temp_password" id="temp_password" name="blood_donor_temp_password" type="password" placeholder="Conform Password"></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><input class="user_city" id="user_city" name="blood_donor_city" type="text" placeholder="City" value="<?php echo $row->blood_donor_city; ?>"></td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td><input class="user_region" id="user_region" name="blood_donor_region" type="text" placeholder="Region" value="<?php echo $row->blood_donor_region; ?>"></td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td><input class="user_phone" id="user_phone" name="blood_donor_phone" type="text" placeholder="Phone No." value="<?php echo $row->blood_donor_phone; ?>"></td>
                            </tr>
<!--
                            <tr>
                                <td><button type="reset">Reset</button></td>
                                <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                            </tr>
-->
                        </table>
                    <?php } ?>
                <?php } ?>
                <button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button>
                <button type="reset">Reset</button>
            </form>
        </div>
        
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>