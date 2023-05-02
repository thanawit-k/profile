<?php

$mailto = "kt.thanawit@gmail.com";
$mailSub = $_POST['subject'];
$mailMsg = $_POST['msg'];
$name 		= $_POST['name'];
$email 		= $_POST['email'];

require './PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
//$mail ->IsHTML(true);
$mail->Username = "testlc.cw@gmail.com";
$mail->Password = "aaahldgeuvcgauca";
$mail->SetFrom($email, $name);
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent";
} else {
    echo "Mail Sent";
}
