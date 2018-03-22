<?php
    try{
        include ("config.php");
        
        if(isset($_POST['admin_login'])){
            if(empty($_POST['admin_name']) AND empty($_POST['admin_password'])){
                $error_message = ("Give your ID/E-mail and your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['admin_name'])){
                $error_message = ("Give your Name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['admin_password'])){
                $error_message = ("Give your Password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $admin_name = "";
                $admin_password = "";
                
                if(isset($_POST['admin_name']))
                    $admin_name = $_POST['admin_name'];
                if(isset($_POST['admin_password']))
                    $admin_password = $_POST['admin_password'];
                
                $statement = $db->prepare("SELECT admin_password FROM `admin` WHERE `admin_name` = $admin_name");
                $statement->execute();
                $result = $statement->fetch();
                
                
                
                session_start();
                if(empty($admin_password)){
                    $_SESSION['admin_name'] = "";
                    $_SESSION['admin_password'] = "";
                }
                else{
                    $_SESSION['admin_name'] = $admin_name;
                    $_SESSION['admin_password'] = $admin_password;
                }
                
                
                if(empty($result))
                    echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
                else
                    foreach($result as $row){
                        if($admin_password == $row){
                            header ('Location: AdminDocument.php');
                        }
                        else;
                    }
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
