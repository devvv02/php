
<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//mail send sample code
$mail = new PHPMailer();
//$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->SMTPAuth =true;
$mail->SMTPSecure='tls';  //tls ssl
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;    // 587 465
$mail->IsHTML(true);
$mail->CharSet='UTF-8';
$mail->Username='devredmi6.backup@gmail.com';
$mail->Password='Pduiscsky1';
$mail->SetFrom('devredmi6.backup@gmail.com', 'Dev Redmi 6');
$mail->AddAddress('pdev024@gmail.com');
$mail->addReplyTo('no-reply@gmail.com', 'No-reply');
$mail->addCC('');
$mail->addBCC('');
$mail->addAttachment('');   
$mail->Subject = 'Test Mail example';
$mail->Body="This is my sample mail babyyyyy";
$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => false,
        'verify_depth' => false,
        'allow_self_signed' => false,
        'verify_peer_name' => false
    ]
);

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

?>