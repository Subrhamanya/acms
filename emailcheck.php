<?php

if (isset($_POST['nametocheck'])) {
    require "library/database.php";
    $registering_email = $_POST['nametocheck'];
    if (isset($_POST['type'])) {
        $query="SELECT * FROM tbl_engineer WHERE email='$registering_email'";
    }else {
        $query = "SELECT * FROM tbl_customer WHERE email='$registering_email'";
    }
    $dbemail=dbQuery($query);
    $email_check = mysqli_num_rows($dbemail);
    if ($email_check == 0) {
        echo "success";
    } else {
        echo "fail";
    }

}