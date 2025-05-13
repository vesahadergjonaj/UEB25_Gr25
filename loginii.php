<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    // Regex për email dhe password
    $emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

    if (!preg_match($emailRegex, $email)) {
        $error = "Email-i nuk është në format të saktë!";
        echo $error;
    } elseif (!preg_match($passwordRegex, $password)) {
        $error = "Fjalëkalimi duhet të ketë të paktën 8 karaktere, një shkronjë të madhe, një të vogël dhe një numër!";
        echo $error;
    } else {
        // Nëse validimi kalon
        $success = "Login i suksesshëm!";
        echo $success;
        // Këtu mund të vazhdosh me kontroll në databazë ose hapje sesioni
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
    <link rel="stylesheet" href="nav.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        min-height: 100vh;
        width: 100%;
      }
      @keyframes floatIn {
        0% {
          transform: translate(-50%, -70%);
          opacity: 0;
        }
        100% {
          transform: translate(-50%, -50%);
          opacity: 1;
        }
      }
      .container {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 430px;
        width: 100%;
        background: rgba(5, 64, 192, 255, 0.8);
        border-radius: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(7px);
        animation: floatIn 1s ease-in-out backwards;
      }
      .container .registration {
        display: none;
      }
      #check:checked ~ .registration {
        display: block;
      }
      #check:checked ~ .login {
        display: none;
      }
      #check {
        display: none;
      }
      .container .form {
        padding: 32px;
      }
      .form header {
        font-size: 32px;
        font-weight: 500;
        text-align: center;
        margin-bottom: 24px;
      }
      .form input {
        height: 60px;
        border-radius: 20px;
        width: 100%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 20.8px;
        border: 1px solid #ddd;
        outline: none;
      }
      .form input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
      }
      .form a {
        font-size: 16px;
        color: #009579;
        text-decoration: none;
      }
      .form a:hover {
        text-decoration: underline;
      }
      .form input.button {
        color: #fff;
        background: #009579;
        border-radius: 20px;
        font-size: 19.2px;
        font-weight: 500;
        letter-spacing: 1px;
        margin-top: 27.2px;
        cursor: pointer;
        transition: 0.4s;
      }
      .form input.button:hover {
        background: #006653;
      }
      .signup {
        font-size: 17px;
        text-align: center;
        color: white;
      }
      .signup label {
        color: #009579;
        cursor: pointer;
      }
      .signup label:hover {
        text-decoration: underline;
      }
      input[type="text"] {
        background-color: white;
        background-image: url("Figurat/image.png");
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding-left: 40px;
      }
      .spital-title {
        font-size: 25px;
        font-weight: 600;
        color: #f4f4f4;
        margin-left: 20px;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <section class="header">
      <nav>
        <div class="spital-title">Healify</div>
        <div class="nav-links">
          <ul>
            <li><a href="home.php">BALLINA</a></li>
            <li><a href="about.php">RRETH NESH</a></li>
            <li><a href="sherbimet.php">SHERBIMET</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contactss.php">KONTAKTI</a></li>
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
        <form method="POST" action ="loginii.php">
          <input type="email" placeholder="Enter your email" name="email" required />
          <input type="password" placeholder="Enter your password" name="password" required />
          <!-- Ridirektimi ne site tjeter nese eki harru passwordin -->
          <a href="forgetpw.php">Forgot password?</a>
          <input type="submit" class="button" value="Login" />
        </form>
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
        <form>
          <input type="email" placeholder="Enter your email" required />
          <input type="password" placeholder="Create a password" required />
          <input type="password" placeholder="Confirm your password" required />
          <input type="submit" class="button" value="Signup" />
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
    <script src="loginii.js"></script>
  </body>
</html>
