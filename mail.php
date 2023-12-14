<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Content-Type: application/json; charset=utf-8');
try {

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $formData = [
        'name'    => filter_input(INPUT_POST, 'form_name', FILTER_SANITIZE_SPECIAL_CHARS),
        'email'   => filter_input(INPUT_POST, 'form_email', FILTER_SANITIZE_EMAIL),
        'phone'   => filter_input(INPUT_POST, 'form_phn', FILTER_SANITIZE_SPECIAL_CHARS),
        'company' => filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS),
        'content' => filter_input(INPUT_POST, 'requirements', FILTER_SANITIZE_SPECIAL_CHARS),
    ];

    $smtpUsername = 'no-reply@bhpsoft.pl';
    $smtpPassword = 'uelaDaXh';
    $emailFrom = $smtpUsername;
    $emailFromName = 'Formularz bhpsoft.pl';
    $emailTo = 'biuro@bhpsoft.pl';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "web24.mail.pl";
    $mail->Port = 587; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->setFrom($emailFrom, $emailFromName);
    $mail->addAddress($emailTo);
    $mail->Subject = 'bhpsoft - Mail';
	$mail->CharSet = "UTF-8";

    ob_start();
    include 'mail_template.php';
    $mail->msgHTML(ob_get_clean());

    $mail->Subject = 'bhpsoft - Zapytanie od: ' . $formData['company'];
    $mail->addReplyTo($formData['email']);

    if(!$mail->send()){
        echo json_encode(['result' => 'error', 'success' => false]);
    }else{
        echo json_encode(['result' => 'success', 'success' => true]);
    }

} catch (\Exception $e) {
    echo json_encode(['result' => 'error', 'success' => false]);
}
