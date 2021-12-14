<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'C:\xampp\htdocs\CRUD\View\PHPMailer\Exception.php';
require 'C:\xampp\htdocs\CRUD\View\PHPMailer\PHPMailer.php';
require 'C:\xampp\htdocs\CRUD\View\PHPMailer\SMTP.php';
 
// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'localhost';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tasnim.hamdi@esprit.tn';                     // SMTP username
    $mail->Password   = '000';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('tasnim.hamdi@esprit.tn', 'Mailer');
    $mail->addAddress('hamditasnim416@gmail.com', 'User');     // Add a recipient
                 
    $mail->addReplyTo('tasnim.hamdu@esprit.tn', 'Information');
    $mail->addCC(' ');
    $mail->addBCC(' ');
 
    // Attachments
    $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
    $mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}