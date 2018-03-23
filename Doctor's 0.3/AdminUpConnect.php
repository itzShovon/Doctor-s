<?php
    try{
        include ("config.php");
        
        if(isset($_POST['update'])){
            $admin_name = $_SESSION['admin_name'];
            $login_user = $_SESSION['login_user'];
            
            if($_SESSION['login_flag'] != 1){
                if(empty($_POST['admin_name']) AND empty($_POST['admin_password'])){
                    $error_message = ("Give your Name and your Password");
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
                else if(empty($_POST['admin_name'])){
                    $error_message = ("Give your Name");
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
                else{
                    $admin_name = "";
                    if(isset($_POST['admin_name']))
                        $admin_name = $_POST['admin_name'];
                }
            }
            else if(empty($_POST['admin_password'])){
                $error_message = ("Give your Password to update");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['temp_password'])){
                $error_message = ("Rewrite Password to update");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(isset($_POST['temp_password']) && isset($_POST['admin_password'])){
                $temp_password = $_POST['temp_password'];
                $admin_password = $_POST['admin_password'];
                if($admin_password == $temp_password){
                    if(isset($_POST['admin_password']))
                        $admin_password = $_POST['admin_password'];
                
                    $sql = "UPDATE admin SET admin_password=? WHERE admin_no=?";
                    $db->prepare($sql)->execute([$admin_password, $login_user]);
                    if(empty($admin_password)){
                        $_SESSION['admin_name'] = "";
                        $_SESSION['admin_password'] = "";
                    }
                    else{
                        $_SESSION['admin_name'] = $admin_name;
                        $_SESSION['admin_password'] = $admin_password;
                    }

                    $error_message = ("Sucessfull...");
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
                else{
                    $error_message = ("Pasword didn't match...");
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
