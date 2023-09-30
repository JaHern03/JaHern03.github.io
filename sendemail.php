<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jason1hernandez@outlook.com';
        $mail->Password = 'ivkjatlntuzhhhxw';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom('jason1hernandez@outlook.com');
        $mail->addAddress('jason1hernandez@outlook.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name: $name <br>Email: $email <br>Message: $message </h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                        <span>Message Sent! Thank you!</span>
                  </div>';

        } catch (Exception $e){
            $alert = '<div class="alert-error">
                        <span>Error! Please try again!</span>
                      </div>';

        }
}

