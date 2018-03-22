<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Data/CSS/Sign_Style.css">
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">-->
</head>

<body>
    <div class="Middle" id="Middle">
        <div class="middle">
            <form name="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
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
                        <th>Word Place</th>
                        <td><input class="user_job" id="user_job" name="user_job" type="text" placeholder="Work Place"></td>
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
                        <th>Country</th>
                        <td><input class="user_country" id="user_country" name="user_country" type="text" placeholder="Country"></td>
                    </tr>
                    <tr>
                        <th>Qualification</th>
                        <td><input class="user_qualification" id="user_qualification" name="user_qualification" type="text" placeholder="Qualification"></td>
                    </tr>
                    <tr>
                        <th>Phone No.</th>
                        <td><input class="user_phone" id="user_phone" name="user_phone" type="text" placeholder="Phone No."></td>
                    </tr>
                    <tr>
                        <th>Sector</th>
                        <td>
                            <select>
                                <option value="Doctor">Doctor</option>
                                <option value="Hospital">Hospital</option>
                                <option value="Blood Donor">Blood Donor</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="user_submit" onclick="return RegisterValidation();">Register</button></td>
                        <td><button type="reset">Reset</button></td>
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