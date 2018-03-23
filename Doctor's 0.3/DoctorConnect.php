<?php
    include ("config.php");
    try{
        $statement = $db->prepare("SELECT * FROM doctors WHERE true");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        
        $user_ID = "";
        $user_ID = htmlspecialchars($_GET["id"]);
        if($user_ID == 0)
            $view_mode = 0;
        else
            $view_mode = 1;
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>