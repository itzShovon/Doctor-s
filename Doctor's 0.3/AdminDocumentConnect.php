<?php
    include ("config.php");
    try{										
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
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>