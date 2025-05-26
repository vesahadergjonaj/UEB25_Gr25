<?php
require_once("user.php");

// Importo klasat e PHPMailer
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

function fixEmail(&$email){
    $email = strtolower($email);
}
function sendWelcomeEmail($email, $userName) {
    fixEmail($email);
    // Inkludo fajllat e nevojshme të PHPMailer
    require_once '../PHPMailer/PHPMailer-master/src/Exception.php';
    require_once '../PHPMailer/PHPMailer-master/src/PHPMailer.php';
    require_once '../PHPMailer/PHPMailer-master/src/SMTP.php';

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'eriontroni3@gmail.com';
        $mail->Password   = 'beub nhcb asnf ljpd';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('eriontroni3@gmail.com', 'Healify');
        $mail->addAddress($email, $userName);
        $mail->isHTML(true);
        $mail->Subject = 'Mirë se erdhe në Healify!';

        $mail->Body = '
            <h2>Përshëndetje!</h2>
            <p>Mirë se erdhe në <b>Healify</b>! Jemi të lumtur që na u bashkove.</p>
            <p>Tani mund të përfitosh nga të gjitha shërbimet tona.</p>
            <br>
            <small>Nëse ke pyetje, mos hezito të na kontaktosh.</small>
        ';

        $mail->send();
        echo"<script>alert('U REALIZU');</script>";

        return true;
    } catch (Exception $e) {
        echo"<script>alert('{$mail->ErrorInfo}');</script>";
        return "Dërgesa dështoi: {$mail->ErrorInfo}";
    }
}

// Funksioni per regjistrim te userit te ri
function registerUser($email, $password, $confirmPassword) {
    $username = explode('@', $email)[0];

    if ($password !== $confirmPassword) {
        return "Fjalëkalimet nuk përputhen!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email-i nuk është valid!";
    }
    if (strlen($password) < 8) {
        return "Fjalëkalimi duhet të jetë të paktën 8 karaktere!";
    }
    // Kontrollo nese email ekziston
    if (User::existsByEmail($email)) {
        return "Ky email ekziston tashmë!";
    }
    // Shto userin e ri
    $user = new User($username, $email, $password);
    if (User::insertUser($user)) {
        sendWelcomeEmail($email, $username);
        return true;
    } else {
        return "Gabim gjatë regjistrimit!";
    }
}
