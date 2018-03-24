<?php
    try{
        include ("config.php");
        
        if(isset($_POST['signin'])){
            session_start();
            if(empty($_POST['user_name']) AND empty($_POST['user_password'])){
                $error_message = ("Give your ID/E-mail and your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_name'])){
                $error_message = ("Give your Name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your Password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $user_name = "";
                $user_password = "";
                
                if(isset($_POST['user_name']))
                    $user_name = $_POST['user_name'];
                if(isset($_POST['user_password']))
                    $user_password = $_POST['user_password'];
                
                
                if($_POST['user_sector'] == "doctor"){
                    $statement = $db->prepare("SELECT * FROM doctors WHERE doctor_name = '$user_name'");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                }
                else if($_POST['user_sector'] == "hospital"){
                    $statement = $db->prepare("SELECT * FROM hospitals WHERE hospital_name = '$user_name'");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                }
                else if($_POST['user_sector'] == "blood_donor"){
                    $statement = $db->prepare("SELECT * FROM blood_donors WHERE blood_donor_name = '$user_name'");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                }
                
                
                if(empty($user_password)){
                    $_SESSION['user_name'] = "";
                    $_SESSION['user_password'] = "";
                }
                else{
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['user_password'] = $user_password;
                }
                
                
                if(empty($result))
                    echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
                else{
                    if($_POST['user_sector'] == "doctor"){
                        $_SESSION['login_mode'] = 2;
                        foreach($result as $row){
                            if(($user_password == $row->doctor_password) && ($user_name == $row->doctor_name)){
                                $_SESSION['login_flag'] = 1;
                                $_SESSION['login_user'] = $row->doctor_no;
                                
                                header ("Location: UpDate.php");
                            }
                        }
                        echo "<script type='text/javascript'>alert('Non doctor... Try again...');</script>";
                    }
                    else if($_POST['user_sector'] == "hospital"){
                        $_SESSION['login_mode'] = 3;
                        foreach($result as $row){
                            if(($user_password == $row->hospital_password) && ($user_name == $row->hospital_name)){
                                $_SESSION['login_flag'] = 1;
                                $_SESSION['login_user'] = $row->hospital_no;
                                header ("Location: UpDate.php");
                            }
                            else
                                echo "<script type='text/javascript'>alert('Non hospital... Try again...');</script>";
                        }
                    }
                    else if($_POST['user_sector'] == "blood_donor"){
                        $_SESSION['login_mode'] = 4;
                        foreach($result as $row){
                            if(($user_password == $row->blood_donor_password) && ($user_name == $row->blood_donor_name)){
                                $_SESSION['login_flag'] = 1;
                                $_SESSION['login_user'] = $row->blood_donor_no;
                                
                                header ("Location: UpDate.php");
                            }
                            else
                                echo "<script type='text/javascript'>alert('Non blood donor... Try again...');</script>";
                        }
                    }
                }
                echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
