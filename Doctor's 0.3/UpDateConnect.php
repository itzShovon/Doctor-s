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
            else if($login_mode == 3){
                $statement2 = $db->prepare("SELECT * FROM hospitals WHERE hospital_no = $login_user");
                $statement2->execute();
                $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);
            }
            else if($login_mode == 4){
                $statement3 = $db->prepare("SELECT * FROM blood_donors WHERE blood_donor_no = $login_user");
                $statement3->execute();
                $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
            }
        }
        
        if(isset($_POST['update_account'])){
            
        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>