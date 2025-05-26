<?php
require_once("User.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendVerificationCode($email, $code) {
    require 'PHPMailer/PHPMailer-master/src/Exception.php';
    require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer-master/src/SMTP.php';

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'erion.n.troni@gmail.com';
        $mail->Password   = 'gdhc tfwv vhuj apt';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('erion.n.troni@gmail.com', 'Healify');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Kodi i verifikimit';
        $mail->Body    = '<b>Kodi juaj eshte: ' . $code . '</b>';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Dërgesa dështoi: {$mail->ErrorInfo}";
    }
}

function generateCode() {
    $code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    $_SESSION['kodi_aktivizimit'] = $code;
    $_SESSION['email_sent'] = false;
    return $code;
}

function checkCode($code) {
    $trimmed = trim($code);
    $final = str_replace('-', '', $trimmed);
    if (!isset($_SESSION['kodi_aktivizimit'])) return "Kodi nuk ekziston!";
    if ($final === $_SESSION['kodi_aktivizimit']) {
        $_SESSION['verified_email'] = $_SESSION['user_email'];
        unset($_SESSION['kodi_aktivizimit']);
        unset($_SESSION['email_sent']);
        // Gjej passin ***SHEMBULL***
        $user = User::getUserByEmail($_SESSION['verified_email']);
        if ($user) {
            $password = $user->getPassword();
            echo "<script>alert('Passwordi juaj eshte: $password');</script>";
        } else {
            echo "<script>alert('Nuk u gjet përdoruesi!');</script>";
        }
        exit;
    } else {
        return "Kodi është i gabuar!";
    }
}
?>
