<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set the mail sender
$mail->setFrom('ssgclibrary@gmail.com', 'Sender Name');

// Add a recipient
$mail->addAddress('pdev024@gmail.com', 'Recipient Name');

// Set the subject of the email
$mail->Subject = 'Subject of the email';

// Set the body of the email
$mail->Body = 'Body of the email';

// Send the email
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>