<?php
require_once("forgetpwFunction.php");
// Starto sessionin nese nuk eshte startuar
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Kontrollo nese user_email eshte ne session
//if (!isset($_SESSION['user_email'])) {
//    header("Location: loginii.php");
//    exit;
//}
// Gjenero kodin nese nuk ekziston, dhe dergo email nese nuk eshte derguar
if (!isset($_SESSION['kodi_aktivizimit']) || !isset($_SESSION['email_sent']) || $_SESSION['email_sent'] !== true) {
    $code = generateCode();
    $sendResult = sendVerificationCode($_SESSION['user_email'], $code);
    if ($sendResult === true) {
        $_SESSION['email_sent'] = true;
        $success = "Emaili u dërgua me sukses!";
    } else {
        $error = $sendResult;
    }
}
// Kur useri klikon submit per te verifikuar kodin
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['code'])) {
    $error = checkCode($_POST['code']);
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Recovery</title>
    <link rel="stylesheet" href="../nav.css" />
      <link rel="stylesheet" href="../login/loginiiStyle.css" />

  </head>
  <body>
    <section class="header">
      <nav>
        <div class="spital-title">Healify</div>
        <div class="nav-links">
          <ul>
            <li><a href="../Home/home.php">BALLINA</a></li>
            <li><a href="../About/about.php">RRETH NESH</a></li>
            <li><a href="../Sherbime/sherbimet.php">SHERBIMET</a></li>
            <li><a href="../Blog/blog.php">BLOG</a></li>
            <li><a href="../Contacts/contactss.php">KONTAKTI</a></li>
            <li><a href="../login/loginii.php">KYÇU</a></li>
          </ul>
        </div>
      </nav>
        <!--        <?php
        //            echo "<p style='color: white; text-align:center; margin-top: 20px;'>Kodi për rikuperim është: <b>" . $_SESSION['kodi_aktivizimit'] . "</b></p>";
        //        ?>-->
    </section>
    <!-- Container per 2 format  -->
    <div class="container">
      <input type="checkbox" id="check" />
      <div class="first-page">
        <header class="resi">Gjej password</header>
        <!-- forma per email-->
       <form method="POST" action="">
         <label for="code" style="color: white; margin: 15px">Enter your email:</label>
         <input type="email" id="emailInput" name="user_email" placeholder="p.sh. user@example.com" required />
           <input type="submit" name="send_code" class="button" value="Send Code" />
         <div class="signup">
           <label for="check">Back</label>
         </div>
      </form>
        <?php
          if (isset($error)) {
            echo "<p style='color: red; text-align:center;'>$error</p>";
          }
          if (isset($success)) {
            echo "<p style='color: green; text-align:center;'>$success</p>";
          }
        ?>
      </div>
      <!-- forma per konfirmim -->
      <div class="second-page">
        <header class="resi">Enter Code</header>

          <form method="POST" action="">
          <label for="code" style="color: white; margin: 15px">Enter the code sent to your email:</label>
          <input type="text" id="code" name="code" placeholder="Enter Code" required/><!--qetu-->
          <input type="submit" class="button" value="Verify" />
          <div class="signup">
            <label for="check">Back</label>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
