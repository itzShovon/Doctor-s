<?php
    include ("config.php");
    try{
        session_start();
        $login_flag = $_SESSION['login_flag'];
        $login_mode = $_SESSION['login_mode'];
        $login_user = $_SESSION['login_user'];
        $comment_no = htmlspecialchars($_GET["id"]);
        $user_mode = htmlspecialchars($_GET["mode"]);
        if($_SESSION['login_flag'] == 0)
            header('Location: Default.php');
        else if($login_mode == 1){
            if($user_mode = 2){
                $sql = "DELETE FROM comment_doctors WHERE comment_no = '$comment_no'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":user_no", $comment_no);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            else if($user_mode = 3){
                $sql = "DELETE FROM comment_hospitals WHERE comment_no = '$comment_no'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":user_no", $comment_no);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            else if($user_mode = 4){
                $sql = "DELETE FROM comment_blood_donors WHERE comment_no = '$comment_no'";

                $stmt = $db->prepare($sql);
                $stmt->bindValue(":user_no", $comment_no);

                $stmt->execute();
                $res = $stmt->rowCount();
                echo "<script type='text/javascript'>alert('Succeeded');</script>";
            }
            header('Location: AdminDocument.php');
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>