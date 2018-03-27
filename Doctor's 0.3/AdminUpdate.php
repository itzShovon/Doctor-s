<?php
    include("AdminUpdateConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Account[Admin]...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/Sign_Style.css">
</head>

<body>
    <div class="Header" id="Header">
        <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_up" id="middle_up">
        </div>
        <div class="middle_body" id="middle_body">
            <div class="middle_body_signupdate" id="middle_body_signupdate">
                <form name="user_update" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); echo "?mode=$user_mode"; echo "&id=$user_ID"; ?>" enctype="multipart/form-data">
                    <?php if($user_mode == 2){ ?>
                        <?php foreach($result as $row)
                            if($row->doctor_no == $user_ID){
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
                            </table>
                        <?php } ?>
                    <?php } ?>
                    <?php if($user_mode == 3){ ?>
                        <?php foreach($result as $row)
                            if($row->hospital_no == $user_ID){
                        ?>
                            <table>
                                <tr>
                                    <th>Hospitals's Picture</th>
                                    <td><input class="user_picture" id="user_picture" name="hospital_picture" type="file" accept="image/*"></td>
                                </tr>
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
                            </table>
                        <?php } ?>
                    <?php } ?>
                    <?php if($user_mode == 4){ ?>
                        <?php foreach($result as $row)
                            if($row->blood_donor_no == $user_ID){
                        ?>
                            <table>
                                <tr>
                                    <th>Blood Donor's Picture</th>
                                    <td><input class="user_picture" id="user_picture" name="blood_donor_picture" type="file" accept="image/*"></td>
                                </tr>
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
                                    <th>Blood Group</th>
                                    <td>
                                        <select name="blood_donor_group">
                                            <option value="A+">A+(ve)</option>
                                            <option value="B+">B+(ve)</option>
                                            <option value="AB+">AB+(ve)</option>
                                            <option value="O+">O+(ve)</option>
                                            <option value="A-">A-(ve)</option>
                                            <option value="B-">B-(ve)</option>
                                            <option value="AB-">AB-(ve)</option>
                                            <option value="O-">O-(ve)</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Region</th>
                                    <td><input class="user_region" id="user_region" name="blood_donor_region" type="text" placeholder="Region" value="<?php echo $row->blood_donor_region; ?>"></td>
                                </tr>
                                <tr>
                                    <th>Job</th>
                                    <td><input class="user_job" id="user_job" name="blood_donor_job" type="text" placeholder="Job" value="<?php echo $row->blood_donor_job; ?>"></td>
                                </tr>
                                <tr>
                                    <th>Phone No.</th>
                                    <td><input class="user_phone" id="user_phone" name="blood_donor_phone" type="text" placeholder="Phone No." value="<?php echo $row->blood_donor_phone; ?>"></td>
                                </tr>
                            </table>
                        <?php } ?>
                    <?php } ?>
                    <table>
                        <tr>
                            <td><button type="submit" name="update" onclick="return RegisterValidation();">Update</button></td>
                            <td><button type="reset">Reset</button></td>
                        </tr>
                    </table>
<!--
                    <button type="submit" name="update" onclick="return RegisterValidation();">Update</button>
                    <button type="reset">Reset</button>
-->
                </form>
            </div>
        </div>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>