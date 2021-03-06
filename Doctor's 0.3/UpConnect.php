<?php
    try{
        include ("config.php");
    
        if(isset($_POST['signup'])){
            if(empty($_POST['user_name'])){
                $error_message = ("Give your name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_email'])){
                $error_message = ("Give your email");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['temp_password'])){
                $error_message = ("Rewrite password...");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_city'])){
                $error_message = ("Give your city");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_phone'])){
                $error_message = ("Give your phone no.");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_region'])){
                $error_message = ("Give your region");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $XTemp = 1;
                
                if(isset($_POST['user_name'])){
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_name'])) {
//                        $Err = "Only letters and white space allowed";
                        echo '<script type="text/javascript">alert("Only letters and white space allowed");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_name = $_POST['user_name'];
                }
                if(isset($_POST['user_email'])){
                    if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
//                        $Err = "Invalid email format";
                        echo '<script type="text/javascript">alert("Invalid email format");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_email = $_POST['user_email'];
                }
                if(isset($_POST['user_phone'])){
                    if (!preg_match("/^[0-9]{11}/",$_POST['user_phone'])) {
//                        $Err = "Only number allowed";
                        echo '<script type="text/javascript">alert("Only number allowed lenght 11 for phone no");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_phone = $_POST['user_phone'];
                }
                if(isset($_POST['user_city'])){
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_city'])) {
//                        $Err = "Only letters and white space allowed";
                        echo '<script type="text/javascript">alert("Only letters and white space allowed");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_city = $_POST['user_city'];
                }
                if(isset($_POST['user_region'])){
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_region'])) {
//                        $Err = "Only letters and white space allowed";
                        echo '<script type="text/javascript">alert("Only letters and white space allowed");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_region = $_POST['user_region'];
                }
                if(isset($_POST['user_password']))
                    $user_password = $_POST['user_password'];
                if(isset($_POST['temp_password']))
                    $temp_password = $_POST['temp_password'];
                if($user_password != $temp_password){
                    echo '<script type="text/javascript">alert("Password did not match...");</script>';
                    $XTemp = 0;
                }
                
                if($XTemp == 1){
//                    echo '<script type="text/javascript">alert("Initializing...");</script>';
                    if($_POST['user_sector'] == "Doctor"){
                        $statement = $db->prepare("SELECT doctor_no FROM doctors WHERE true");
                        $statement->execute();
                        $result = $statement->fetchAll(PDO::FETCH_OBJ);
                        
                        foreach($result as $row){
                            $_SESSION['login_mode'] = "2";
                            $_SESSION['login_flag'] = "0";
                            $_SESSION['login_user'] = $row->doctor_no;
                            $login_user = $_SESSION['login_user'];
                        }
                        $login_user += 1;
                        
//                        echo "<script type='text/javascript'>alert('$login_user');</script>";
//                        echo '<script type="text/javascript">alert("Adding...");</script>';
                        $statement = $db->prepare("INSERT INTO doctors 
                        (
                            doctor_no,
                            doctor_name,
                            doctor_password,
                            doctor_city,
                            doctor_region,
                            doctor_phone, 
                            doctor_email
                        )
                        VALUES (?,?,?,?,?,?,?)");
                        $statement->execute(array(
                            $login_user,
                            $user_name,
                            $user_password,
                            $user_city,
                            $user_region,
                            $user_phone,
                            $user_email
                        ));
                    
                        $message = "Thanks! information is Saved successfully.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
//                        header ("Location: UserEdit.php?id=$login_user&mode=2");
                    }
                }
                else
                    echo '<script type="text/javascript">alert("Failed! Something wrong...");</script>';
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
