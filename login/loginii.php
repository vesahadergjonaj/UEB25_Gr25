<?php
require_once("loginiiFunction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $email = $_POST['reg_email'] ;
    $password = trim($_POST['reg_password'] ?? '');
    $confirmPassword = trim($_POST['confirm_password'] ?? '');

    $result = registerUser($email, $password, $confirmPassword);
    sendWelcomeEmail($email, "test");
    if ($result === true) {
        $success = "Regjistrimi u krye me sukses!";
    } else {
        $error = $result;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login & Registration Form</title>
    <link rel="stylesheet" href="../nav.css" />
      <link rel="stylesheet" href="../perdorim/forgetpwStyle.css" />
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
            <li><a href="loginii.php">KYÇU</a></li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- Ni container per 2 login forms -->
    <?php
      if (isset($error)) {
          echo "<p style='color: red;'>$error</p>";
      }
      if (isset($success)) {
          echo "<p style='color: green;'>$success</p>";
      }
    ?>
    <div class="container">
      <input type="checkbox" id="check" />
      <!-- qasja -->
      <div class="login form">
        <header style="color: white">Login</header>
          <form method="POST" action="loginii.php" id="loginForm">
              <input type="email" placeholder="Enter your email" name="email" id="emailInput" required />
              <input type="password" placeholder="Enter your password" name="password" required />
              <input type="submit" class="button" value="Login" />
          </form>

<!--          <form method="POST" action="../perdorim/forgetpw.php" id="forgotForm">-->
<!--              <input type="hidden" name="email" id="forgotEmail" />-->
<!--              <a href="../perdorim/forgetpw.php" style="color: #009579;">Forgot password?</a>-->
<!--          </form>-->
        <div class="signup">
          <span class="signup"
            >Don't have an account?
            <!-- toggle per login/signup -->
            <label for="check">Signup</label>
          </span>
        </div>
      </div>
      <!-- Regjistrimi -->

          <div class="registration form">
            <header style="color: white">Signup</header>
              <form method="POST" action="loginii.php">
                  <input type="email" name="reg_email" placeholder="Enter your email" required />
                  <input type="password" name="reg_password" placeholder="Create a password" required />
                  <input type="password" name="confirm_password" placeholder="Confirm your password" required />
                  <input type="submit" name="signup" class="button" value="Signup" />
              </form>
              <div class="signup">
              <span class="signup"
                >Already have an account?
                <!-- toggle per login/signup -->
                <label for="check">Login</label>
              </span>
            </div>
          </div>
    </div>
    <script>
        // function submitForgotForm(event) {
        //     event.preventDefault(); // kjo ndalon rifreskimin e faqes
        //     const email = document.querySelector('#emailInput').value;
        //     if (!email) {
        //         alert("Ju lutem shkruani emailin përpara se të vazhdoni.");
        //         return;
        //     }
        //     document.querySelector('#forgotEmail').value = email;
        //     document.querySelector('#forgotForm').submit();
        // }
    </script>
  </body>
</html>
