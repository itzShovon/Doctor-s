<?php
    include ("config.php");
    try{
        $user_ID = "";
        $user_ID = htmlspecialchars($_GET["id"]);
        if(($user_ID != 0))
            $view_mode = 1;
        else
            $view_mode = 0;
        
        
//        session_start();
        $statement = $db->prepare("SELECT * FROM blood_donors WHERE true");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        
                
        $statementX = $db->prepare("SELECT * FROM comment_blood_donors WHERE blood_donor_no = '$user_ID'");
        $statementX->execute();
        $resultX = $statementX->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>