<?php
    include("AdminUpConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Sign_Style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="Data/CSS/Style.css">-->
</head>

<body>
    <div class="Middle" id="Middle">
        <div class="middle">
            <form name="admin_update" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <table>
                    <?php
                        if($_SESSION['login_flag'] != 1){
                    ?>
                        <tr>
                            <th>Name</th>
                            <td><input class="admin_name" id="admin_name" name="admin_name" type="text" placeholder="Name" autofocus></td>
                        </tr>
                    <?php
                        }
//                        else;
                    ?>
                    <tr>
                        <th>Password</th>
                        <td><input class="admin_password" id="admin_password" name="admin_password" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <th>Conform Password</th>
                        <td><input class="temp_password" id="temp_password" name="temp_password" type="password" placeholder="Conform Password"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="update" onclick="return RegisterValidation();">Update</button></td>
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