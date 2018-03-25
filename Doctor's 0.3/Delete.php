<?php
    include ("config.php");
    try{
        session_start();
        $login_flag = $_SESSION['login_flag'];
        $login_mode = $_SESSION['login_mode'];
        $login_user = $_SESSION['login_user'];
        if($_SESSION['login_flag'] == 0)
            header('Location: Default.php');
        else{
            if($login_mode = 2){
                $sql = "DELETE FROM doctors WHERE doctor_no = '$login_user'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":login_user", $login_user);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            else if($login_mode = 3){
                $sql = "DELETE FROM hospitals WHERE hospital_no = '$login_user'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":login_user", $login_user);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            else if($login_mode = 4){
                $sql = "DELETE FROM blood_donors WHERE blood_donor_no = '$login_user'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":login_user", $login_user);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            header('Location: Default.php');
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>