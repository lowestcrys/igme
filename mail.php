<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["Submit"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Good Day! <strong> '. $name.'! </strong></p>
        <p>Thank you for your feedback!</p>
        <br>
        A flower a day makes a brighter day!<br>
        <strong></b>IGME WATERCRAFT SPECIALIST INC.</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "iamlouisereyes123@gmail.com";//gagamitin pang send ng email
    $mail->Password = "jfkileptqyakjaxl";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    $mail->setFrom("iamlouisereyes123@gmail.com","IGME WATERCRAFT SPECIALIST INC.");//papalitan name ng email
    $mail->addAddress($email);//kumukuha ng email tas doon isesend sa input ni user
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    header('location:index.html');
}
?>