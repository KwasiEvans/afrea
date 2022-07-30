<?php
session_start();
include('connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
function sendemail_verify($fName,$Email,$verify_token)
{
  $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host  = 'smtp.example.com';
      $mail->Username   = 'evansow2002@gmail.com';
      $mail->Password   = 'sexygogomega20';

      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;

      //Recipients
      $mail->setFrom('evansow2002@hmail.com', $fName);
      $mail->addAddress($Email);

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = '<p>Email Verification from Afrea';

      $email_template = "
      <h2>We will style you</h2>
      ";
      $mail->Body    = $email_template;
      $mail->send();
      echo 'Message has been sent';
}


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
    $verify_token = md5(rand());

    $check_email = mysqli_query($conn, "SELECT email FROM member_register where email = '$Email' ");
    if(mysqli_num_rows($check_email) > 0){
        echo '<script>alert("Email already exist")</script>';
        // header("Location: ../index.php");
    }
    else{
      if($Email != $cfEmail)
      {
        echo "Email does not much";
      }
      else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = mysqli_query($conn, "INSERT INTO individual_mem (title, fName, mName, lName, email, cEmail, phNumber, country, cZip, mDura) VALUES ('$title','$fName','$mName','$lName', '$Email', '$cfEmail', '$phone', '$country', '$zipCode','$Duration')");
      }
    }
    sendemail_verify("$fName","$Email","$verify_token");
    echo '<script>alert("Record Entered Successfully, Check Your Email To Complete Registration ")</script>';
    include("../Email/index.php");
}