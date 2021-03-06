<?php
    try{
        include ("config.php");
        
        session_start();
        if(($_SESSION['login_flag'] == 0) || ($_SESSION['login_mode'] != 1))
            header('Location: Admin.php');
        
        else{
            $user_ID = "";
            $user_mode = "";
            $user_ID = htmlspecialchars($_GET["id"]);
            $user_mode = htmlspecialchars($_GET["mode"]);
            
            $XTemp = 1;
            
            if($user_mode == 2){
                $statement = $db->prepare("SELECT * FROM doctors WHERE doctor_no = $user_ID");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
            else if($user_mode == 3){
                $statement = $db->prepare("SELECT * FROM hospitals WHERE hospital_no = $user_ID");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
            else if($user_mode == 4){
                $statement = $db->prepare("SELECT * FROM blood_donors WHERE blood_donor_no = $user_ID");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
            }
            
            
            if(isset($_POST['update'])){
                
    //            if(isset($_POST['user_password']))
    //                $user_password = $_POST['user_password'];
    //            if(isset($_POST['temp_password']))
    //                $temp_password = $_POST['temp_password'];
    //            if($user_password != $temp_password){
    //                echo '<script type="text/javascript">alert("Password did not match...");</script>';
    //                $XTemp = 0;
    //            }

                if($XTemp == 1){
                    echo "<script type='text/javascript'>alert('Working...');</script>";
                    if($user_mode == 2){
                        echo "<script type='text/javascript'>alert('User founded...');</script>";
                        $doctor_picture = ($_FILES['doctor_picture']['name']);
                        $doctor_name = $_POST['doctor_name'];
                        $doctor_email = $_POST['doctor_email'];
                        $doctor_password = $_POST['doctor_password'];
                        $doctor_temp_password = $_POST['doctor_temp_password'];
                        $doctor_sector = $_POST['doctor_sector'];
                        $doctor_city = $_POST['doctor_city'];
                        $doctor_region = $_POST['doctor_region'];
                        $doctor_phone = $_POST['doctor_phone'];
                        $doctor_degree = $_POST['doctor_degree'];
                        $doctor_job = $_POST['doctor_job'];

                        if($doctor_password == $doctor_temp_password){
                            $sql = "UPDATE doctors SET doctor_picture=?, doctor_name=?, doctor_email=?, doctor_password=?, doctor_sector=?, doctor_city=?, doctor_region=?, doctor_phone=?, doctor_degree=?, doctor_job=?, doctor_flag=? WHERE doctor_no=?";
                            $db->prepare($sql)->execute([$doctor_picture, $doctor_name, $doctor_email, $doctor_password, $doctor_sector, $doctor_city, $doctor_region, $doctor_phone, $doctor_degree, $doctor_job, 'No', $user_ID]);

                            echo "<script type='text/javascript'>alert('Update Sucessful');</script>";

                            $temp = $_FILES['doctor_picture']['tmp_name'];
                            move_uploaded_file($temp, 'Data/Images/Doctor/'.$doctor_picture);

                            header('Location: Admin.php');
                        }
                        else
                            echo "<script type='text/javascript'>alert('Password did not match');</script>";
                    }
                    else if($user_mode == 3){
                        $hospital_picture = ($_FILES['hospital_picture']['name']);
                        $hospital_name = $_POST['hospital_name'];
                        $hospital_email = $_POST['hospital_email'];
                        $hospital_password = $_POST['hospital_password'];
                        $hospital_temp_password = $_POST['hospital_temp_password'];
                        $hospital_city = $_POST['hospital_city'];
                        $hospital_region = $_POST['hospital_region'];
                        $hospital_phone = $_POST['hospital_phone'];

                        if($hospital_password == $hospital_temp_password){
                            $sql = "UPDATE hospitals SET hospital_picture=?, hospital_name=?, hospital_email=?, hospital_password=?, hospital_city=?, hospital_region=?, hospital_phone=?, hospital_flag=? WHERE hospital_no=?";
                            $db->prepare($sql)->execute([$hospital_picture, $hospital_name, $hospital_email, $hospital_password, $hospital_city, $hospital_region, $hospital_phone, 'No', $user_ID]);

                            echo "<script type='text/javascript'>alert('Update Sucessful');</script>";

                            $temp = $_FILES['hospital_picture']['tmp_name'];
                            move_uploaded_file($temp, 'Data/Images/Hospital/'.$hospital_picture);

                            header('Location: Admin.php');
                        }
                        else
                            echo "<script type='text/javascript'>alert('Password did not match');</script>";
                    }
                    else if($user_mode == 4){
                        $blood_donor_picture = ($_FILES['blood_donor_picture']['name']);
                        $blood_donor_name = $_POST['blood_donor_name'];
                        $blood_donor_email = $_POST['blood_donor_email'];
                        $blood_donor_password = $_POST['blood_donor_password'];
                        $blood_donor_temp_password = $_POST['blood_donor_temp_password'];
                        $blood_donor_group = $_POST['blood_donor_group'];
                        $blood_donor_city = $_POST['blood_donor_city'];
                        $blood_donor_region = $_POST['blood_donor_region'];
                        $blood_donor_phone = $_POST['blood_donor_phone'];
                        $blood_donor_job = $_POST['blood_donor_job'];

                        if($blood_donor_password == $blood_donor_temp_password){
                            $sql = "UPDATE blood_donors SET blood_donor_picture=?, blood_donor_name=?, blood_donor_email=?, blood_donor_password=?, blood_donor_group=?, blood_donor_city=?, blood_donor_region=?, blood_donor_phone=?, blood_donor_job=?, blood_donor_flag=? WHERE blood_donor_no=?";
                            $db->prepare($sql)->execute([$blood_donor_picture, $blood_donor_name, $blood_donor_email, $blood_donor_password, $blood_donor_group, $blood_donor_city, $blood_donor_region, $blood_donor_phone, $blood_donor_job, 'No', $user_ID]);

                            echo "<script type='text/javascript'>alert('Update Sucessful');</script>";

                            $temp = $_FILES['blood_donor_picture']['tmp_name'];
                            move_uploaded_file($temp, 'Data/Images/BloodDonor/'.$blood_donor_picture);

                            header('Location: Admin.php');
                        }
                        else
                            echo "<script type='text/javascript'>alert('Password did not match');</script>";
                    }
                }
                else
                    echo '<script type="text/javascript">alert("Failed! Something wrong...");</script>';
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
