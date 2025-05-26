<?php
require_once("User.php");

// Importo klasat e PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendWelcomeEmail($email, $userName) {
    // Inkludo fajllat e nevojshme të PHPMailer
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
        $mail->addAddress($email, $userName);
        $mail->isHTML(true);
        $mail->Subject = 'Mirë se erdhe në Healify!';

        $mail->Body = '
            <h2>Përshëndetje, ' . htmlspecialchars($userName) . '!</h2>
            <p>Mirë se erdhe në <b>Healify</b>! Jemi të lumtur që na u bashkove.</p>
            <p>Tani mund të përfitosh nga të gjitha shërbimet tona.</p>
            <br>
            <small>Nëse ke pyetje, mos hezito të na kontaktosh.</small>
        ';

        $mail->send();
        return true;
    } catch (Exception $e) {
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
