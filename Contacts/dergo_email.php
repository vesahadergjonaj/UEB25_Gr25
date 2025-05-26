<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$user_email = $_POST['email'];
$emri = $_POST['emri'];
$data_terminit = $_POST['date'];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vesa.hadergjonaj@gmail.com';   
    $mail->Password   = 'ympwfzbxfhsvkenf';                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Vendos adresën nga do dërgohet emaili
    $mail->setFrom('vesa.hadergjonaj@gmail.com', 'Klinika Healify');

    // Vendos adresën tek përdoruesi që plotësoi formën
    $mail->addAddress($user_email, $emri);

    $mail->isHTML(true);
    $mail->Subject = 'Konfirmimi i termint tuaj';
    $mail->Body    = "Pershendetje $emri,<br><br>Termini juaj me date <b>$data_terminit</b> eshte regjistruar me sukses.<br>Faleminderit qe na zgjodhet!";

    $mail->send();
    echo 'Emaili i konfirmimit u dërgua me sukses.';
} catch (Exception $e) {
    echo "Dërgimi i emailit dështoi: {$mail->ErrorInfo}";
}
?>
