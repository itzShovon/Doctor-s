<?php
    include ("config.php");
    try{
        session_start();
//        if(($_SESSION['login_flag'] == 0) && ($_SESSION['login_mode'] == 0)){
            if(isset($_POST['header_search'])){
                $view_mode = "";
                $sector = "";
                $name = "";
                $location = "";
                $sector = $_POST['sector'];
                $_SESSION['sector'] = $sector;
                $_SESSION['name'] = $_POST['keyword'];
                $_SESSION['name'] = $name;
                $city = $_POST['location'];
                $_SESSION['city'] = $city;
            }
            else if(isset($_POST['user_submit'])){
                $view_mode = "";
                $sector = "";
                $name = "";
                $location = "";
                $sector = $_SESSION['sector'];
                $name = $_POST['keyword'];
                $_SESSION['name'] = $name;
                $city = $_SESSION['city'];
            }
//            if($_POST['keyword'] != "")
//                $_SESSION['name'] = $_POST['keyword'];
            $view_mode = htmlspecialchars($_GET["mode"]);
            $user_ID = htmlspecialchars($_GET["id"]);
            $sector = $_SESSION['sector'];
            $name = $_SESSION['name'];
            $city = $_SESSION['city'];

            if($sector == "doctors"){
                $statement = $db->prepare("SELECT * FROM doctors WHERE doctor_name LIKE '%$name%' AND doctor_city LIKE '%$city%'");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
            else if($sector == "hospitals"){
                $statement = $db->prepare("SELECT * FROM hospitals WHERE hospital_name LIKE '%$name%' AND hospital_city LIKE '%$city%'");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
            else if($sector == "blood_donors"){
                $statement = $db->prepare("SELECT * FROM blood_donors WHERE blood_donor_name LIKE '%$name%' AND blood_donor_city LIKE '%$city%'");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
//        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>