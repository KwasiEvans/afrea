<?php

include('connect.php');

if(isset($_POST['register']))

    $title = $_POST['title'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $Email = $_POST['email'];
    $cfEmail = $_POST['confEmail'];
    $phone = $_POST['phNum'];
    $country = $_POST['country'];
    $zipCode = $_POST['zipCode'];
    $Duration = $_POST['mDura'];


    $check_email = mysqli_query($conn, "SELECT email FROM national_register where email = '$Email' ");
    if(mysqli_num_rows($check_email) > 0){
        echo '<script>alert("Email already exist")</script>';
    }
    else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = mysqli_query($conn, "INSERT INTO national_register (title, fName, mName, lName, email, cEmail, phNumber, country, cZip, mDura) VALUES ('$title','$fName','$mName','$lName', '$Email', '$cfEmail', '$phone', '$country', '$zipCode','$Duration')");
    }
    echo '<script>alert("Record Entered Successfully, Check Your Email To Complete Registration ")</script>';
        include ("../Email/index.php");
    }