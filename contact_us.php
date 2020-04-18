<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect_db.php');
include("./php/class.phpmailer.php"); 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email_address = 'noreplykaapimanagement@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mail = new PHPMailer;
    $mailaddress = $email_address;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail -> Username = 'noreplykaapimanagement@gmail.com';
    $mail -> Password = 'hulikere1968#';                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('noreplykaapimanagement@gmail.com', 'no reply');
    $mail->addAddress($mailaddress);     // Add a recipient                                  // Set email format to HTML
    $mail->Subject = 'Kaapi Management';
    $mail->Body    = '<h1 align =center>Name : '.$name.' </h1>
                      <h2 align =center>Email : '.$email.'</h2>
                      <h2 align =center>Subject : '.$subject.'</h2>
                      <h2 align =center>Message : '.$message.'</h2>
                      <h3 aling = left><a href = "http://localhost:8888/farmie/index.php"> Login Using Your Credentials';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail -> isHTML(true);
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo'<script>
        alert("Email has been sent successfully");
        window.location= "index.php";
        </script>';
    }
}
?>