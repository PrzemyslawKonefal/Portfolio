<?php
session_start();

$to      = 'przemyslaw.konefal@gmail.com';
$subject = 'Portfolio Kontakt';
$message = $_POST['name']."\r\n".$_POST['message'];
$headers = 'Z maila: ' .$_POST['email']. "\r\n";

mail($to, $subject, $message, $headers);
$_SESSION['MailSent'] = true;
header('Location: index.php#scrollBottom');
?>
