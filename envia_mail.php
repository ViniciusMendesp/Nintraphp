
<?php
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.mail.yahoo.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'soaresfabio@yahoo.com.br';
$mail->Password = 'Vb2010816';
$mail->setFrom('soaresfabio@yahoo.com.br', 'fabio');
$mail->addAddress('fabio@nitratus.com', 'Receiver Name');
$mail->Subject = 'Testing PHPMailer';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>