<?php
    include("AdminDocumentConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Document...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/GuestDocumentStyle.css">
</head>

<body>
    <div class="Header" id="Header">
        <div class="header" id="header">
            <div class="header_left" id="header_left">
                <a href="Home.php"><img src="Data/Images/Icon/Icon.png" alt="Doctor's" height="42" width="42"></a>
                <a href="Admin.php">Admin Home</a>
                <a href="javascript:history.go(-1)">Back</a>
<!--                <a href="AdminUpdate.php">Update Password</a>-->
                <a href="SignOut.php">Sign Out</a>
            </div>
            <div class="header_right" id="header_right">
<!--
                <form name="search_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <input class="user_name" id="user_name" name="user_name" type="text" placeholder="Search by Name." autofocus>
                    <button type="submit" name="user_submit">Search</button>
                </form>
-->
            </div>
        </div>
    </div>
    <div class="Middle" id="Middle">
        <div class="middle_left" id="middle_left">
            <?php
                if($view_mode == 0){
            ?>
                <div class="user_list" id="user_list">
                    <h4>Doctors</h4>
                    <?php foreach($result1 as $row){ ?>
                    <div><a href="AdminDocument.php?id=<?php echo $row->doctor_no; ?>&mode=2">
                        <?php echo $row->doctor_name ?>
                        <?php echo ', '; ?>
                        <?php echo $row->doctor_job; ?>
                    </a></div>
                    <?php } ?>

                    <h4>Hospitals</h4>
                    <?php foreach($result2 as $row){ ?>
                    <div><a href="AdminDocument.php?id=<?php echo $row->hospital_no; ?>&mode=3">
                        <?php echo $row->hospital_name ?>
                        <?php echo ', '; ?>
                        <?php echo $row->hospital_city; ?>
                    </a></div>
                    <?php } ?>

                    <h4>Blood Donors</h4>
                    <?php foreach($result3 as $row){ ?>
                    <div><a href="AdminDocument.php?id=<?php echo $row->blood_donor_no; ?>&mode=4">
                        <?php echo $row->blood_donor_name; ?>
                        <?php echo ', '; ?>
                        <?php echo $row->blood_donor_job; ?>
                    </a></div>
                    <?php } ?>
                </div>
            <?php
                }else{
            ?>
                <h4>Doctors</h4>
                <?php if($user_mode == 2){ ?>
                    <?php foreach($result1 as $row)
                        if($row->doctor_no == $user_ID){
                    ?>
                        <div class="user_info" id="user_info">
                            <div class="user_info_left" id="user_info_left">
                                <?php if($row->doctor_picture != ""){ ?>
                                    <img src='Data/Images/Doctor/<?php echo $row->doctor_picture; ?>' alt="Doctors Photo" height="42" width="42">
                                <?php }else{ ?>
                                    <img src='Data/Images/Doctor/Doctor%20Profile.png' alt="Doctors Photo" height="42" width="42">
                                <?php } ?>
                                <?php
                                    echo "<h3>$row->doctor_name</h3>";
                                    echo "<h5>$row->doctor_degree[$row->doctor_job]</h5>";
                                ?>
                            </div>
                            <div class="user_info_right" id="user_info_right">
                                <?php
                                    echo "<p>Rating: $row->doctor_rating</p>";
                                    echo "<p>Location: $row->doctor_region, $row->doctor_city</p>";
                                    echo "<p>Sector: $row->doctor_sector[$row->doctor_degree]</p>";
                                    echo "<p>Works at: $row->doctor_job</p>";
                                    echo "<p>Contact:</p>";
                                    echo "<p>Phone: $row->doctor_phone</p>";
                                    echo "<p>E-Mail: $row->doctor_email</p>";
                                ?>
                            </div>
                            <a class="user_info_action" href="AdminDelete.php?id=<?php echo $row->doctor_no; ?>&mode=2">Delete</a>
                            <a class="user_info_action" href="AdminUpdate.php?id=<?php echo $row->doctor_no; ?>&mode=2">Update</a>
                        </div>
                    <?php } ?>
                    <div class="comment" id="comment">
                        <?php foreach($result1X as $row){
//                            if($row->doctor_no == $user_ID){
                        ?>
                            <h5>E-mail: <?php echo $row->writers_email; ?></h5>
                            <p>Rated: <?php echo $row->writers_rating; ?></p>
                            <p>Says: <?php echo $row->comment; ?></p>

                            <?php if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode'] == 1)){ ?>
                                <a class="user_info_action" href="AdminCommentDelete.php?id=<?php echo $row->comment_no; ?>&mode=2">Delete</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                
                <h4>Hospitals</h4>
                <?php if($user_mode == 3){ ?>
                    <?php foreach($result2 as $row)
                        if($row->hospital_no == $user_ID){
                    ?>
                        <div class="user_info" id="user_info">
                            <div class="user_info_left" id="user_info_left">
                                <?php if($row->hospital_picture != ""){ ?>
                                    <img src='Data/Images/Hospital/<?php echo $row->hospital_picture; ?>' alt="Hospitals Photo" height="42" width="42">
                                <?php }else{ ?>
                                    <img src='Data/Images/Hospital/Hospital%20Profile.png' alt="Hospitals Photo" height="42" width="42">
                                <?php } ?>
                                <?php
                                    echo "<h3>$row->hospital_name</h3>";
                                    echo "<h5>$row->hospital_city[$row->hospital_region]</h5>";
                                ?>
                            </div>
                            <div class="user_info_right" id="user_info_right">
                                <?php
                                    echo "<p>Rating: $row->hospital_rating</p>";
                                    echo "<p>Location: $row->hospital_region, $row->hospital_city</p>";
                                    echo "<p>Contact:</p>";
                                    echo "<p>Phone: $row->hospital_phone</p>";
                                    echo "<p>E-Mail: $row->hospital_email</p>";
                                ?>
                            </div>
                            <a class="user_info_action" href="AdminDelete.php?id=<?php echo $row->hospital_no; ?>&mode=3">Delete</a>
                            <a class="user_info_action" href="AdminUpdate.php?id=<?php echo $row->hospital_no; ?>&mode=3">Update</a>
                        </div>
                    <?php } ?>
                    <div class="comment" id="comment">
                        <?php foreach($result2X as $row){
//                            if($row->hospital_no == $user_ID){
                        ?>
                            <h5>E-mail: <?php echo $row->writers_email; ?></h5>
                            <p>Rated: <?php echo $row->writers_rating; ?></p>
                            <p>Says: <?php echo $row->comment; ?></p>

                            <?php if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode'] == 1)){ ?>
                                <a class="user_info_action" href="AdminCommentDelete.php?id=<?php echo $row->comment_no; ?>&mode=3">Delete</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                
                <h4>Blood Donors</h4>
                <?php if($user_mode == 4){ ?>
                    <?php foreach($result3 as $row)
                        if($row->blood_donor_no == $user_ID){
                    ?>
                        <div class="user_info" id="user_info">
                            <div class="user_info_left" id="user_info_left">
                                <?php if($row->blood_donor_picture != ""){ ?>
                                    <img src='Data/Images/Blood_Donor/<?php echo $row->blood_donor_picture; ?>' alt="Doctors Photo" height="42" width="42">
                                <?php }else{ ?>
                                    <img src='Data/Images/Blood_Donor/Blood%20Donor%20Profile.png' alt="Blood Donors Photo" height="42" width="42">
                                <?php } ?>
                                <?php
                                    echo "<h3>$row->blood_donor_name</h3>";
                                    echo "<h5>$row->blood_donor_group</h5>";
                                ?>
                            </div>
                            <div class="user_info_right" id="user_info_right">
                                <?php
                                    echo "<p>Rating: $row->blood_donor_rating</p>";
                                    echo "<p>Location: $row->blood_donor_region, $row->blood_donor_city</p>";
                                    echo "<p>Works at: $row->blood_donor_job</p>";
                                    echo "<p>Contact:</p>";
                                    echo "<p>Phone: $row->blood_donor_phone</p>";
                                    echo "<p>E-Mail: $row->blood_donor_email</p>";
                                ?>
                            </div>
                            <a class="user_info_action" href="AdminDelete.php?id=<?php echo $row->blood_donor_no; ?>&mode=4">Delete</a>
                            <a class="user_info_action" href="AdminUpdate.php?id=<?php echo $row->blood_donor_no; ?>&mode=4">Update</a>
                        </div>
                    <?php } ?>
                    <div class="comment" id="comment">
                        <?php foreach($result3X as $row){
//                            if($row->blood_donor_no == $user_ID){
                        ?>
                            <h5>E-mail: <?php echo $row->writers_email; ?></h5>
                            <p>Rated: <?php echo $row->writers_rating; ?></p>
                            <p>Says: <?php echo $row->comment; ?></p>

                            <?php if(($_SESSION['login_flag'] == 1) && ($_SESSION['login_mode'] == 1)){ ?>
                                <a class="user_info_action" href="AdminCommentDelete.php?id=<?php echo $row->comment_no; ?>&mode=4">Delete</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        
        <?php include 'MiddleRight.php' ?>
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>