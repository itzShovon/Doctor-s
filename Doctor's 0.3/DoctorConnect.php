<?php
    include ("config.php");
    try{
        $user_ID = "";
        $user_ID = htmlspecialchars($_GET["id"]);
        if($user_ID == 0)
            $view_mode = 0;
        else
            $view_mode = 1;
        
        
        $statement = $db->prepare("SELECT * FROM doctors WHERE true");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        
                
                
        $statementX = $db->prepare("SELECT * FROM comment_doctors WHERE doctor_no = '$user_ID'");
        $statementX->execute();
        $resultX = $statementX->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>