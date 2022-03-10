<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/project/vendor/autoload.php';

function sendmail($otp){
    $mail = new PHPMailer(true);

    try {
        $email = $_SESSION['email'];
        //Server settings
        $mail->SMTPDebug = 1;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = TRUE;                                   //Enable SMTP authentication
        $mail->Username   = 'shetkarheramb10@gmail.com';                     //SMTP username

        $mail->Password   = 'pid@maresogle####';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('shetkarheramb10@gmail.com', 'Admin');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'OTP : Car and Bike Rental System';
        $mail->Body    = 'Your OTP is : '+ $otp;
        //$mail->AltBody    = 'Your OTP is : '+ $otp;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
    }

    return 0;
}
