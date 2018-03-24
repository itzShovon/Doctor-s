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
            if($login_mode == 2){
                $statement1 = $db->prepare("SELECT * FROM doctors WHERE doctor_no = $login_user");
                $statement1->execute();
                $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);
            }
        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>