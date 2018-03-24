<?php
    include ("config.php");
    try{
        session_start();
        if(($_SESSION['login_flag'] == 0) && ($_SESSION['login_mode'] != 1))
            header('Location: Admin.php');
        
        
        
        $user_ID = "";
        $user_mode = "";
        $user_ID = htmlspecialchars($_GET["id"]);
        $user_mode = htmlspecialchars($_GET["mode"]);
        if($user_ID == 0){
            $view_mode = 0;
            
            $statement1 = $db->prepare("SELECT * FROM doctors WHERE true");
            $statement1->execute();
            $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

            $statement2 = $db->prepare("SELECT * FROM hospitals WHERE true");
            $statement2->execute();
            $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);

            $statement3 = $db->prepare("SELECT * FROM blood_donors WHERE true");
            $statement3->execute();												
            $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $view_mode = 1;
            
            if($user_mode == 2){
                $statement1 = $db->prepare("SELECT * FROM doctors WHERE doctor_no = $user_ID");
                $statement1->execute();
                $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);
            }
            else if($user_mode == 3){
                $statement2 = $db->prepare("SELECT * FROM hospitals WHERE hospital_no = $user_ID");
                $statement2->execute();
                $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);
            }
            else if($user_mode == 4){
                $statement3 = $db->prepare("SELECT * FROM blood_donors WHERE blood_donor_no = $user_ID");
                $statement3->execute();
                $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
            }
        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>