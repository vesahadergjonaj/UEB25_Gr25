<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Recovery</title>
    <link rel="stylesheet" href="nav.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        min-height: 100vh;
        width: 100%;
        background-image: url(Figurat/bgfig2.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
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

      .container .form {
        padding: 32px;
      }

      .form header {
        font-size: 32px;
        font-weight: 500;
        text-align: center;
        margin-bottom: 24px;
        color: white;
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

      .form input.button {
        color: #fff;
        background: #009579;
        font-size: 19.2px;
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
        margin-top: 15px;
      }

      .signup label {
        color: #009579;
        cursor: pointer;
      }

      .signup label:hover {
        text-decoration: underline;
      }

      .second-page {
        display: none;
      }

      #check:checked ~ .second-page {
        display: block;
      }

      #check:checked ~ .first-page {
        display: none;
      }

      #check {
        display: none;
      }
      input[type="text"] {
        margin: 8px 15px;
      }

      input[type="text"]:focus {
        border: 3px solid #555;
        width: 50%;
        padding: 12px 20px;
        margin: 8px 9px;
        box-sizing: content-box;
        padding-left: 7px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
      }
      .resi {
        margin-top: 15px;
        margin-left: 15px;
        margin-bottom: 10px;
        color: white;
        text-align: center;
      }
      input[type="submit"] {
        height: 25px;
        width: 25%;
        padding: 0 15px;
        font-size: 15px;
        border-radius: 20px;
        border: 1px solid #ddd;
        outline: none;
        color: #fff;
        background: #009579;
        cursor: pointer;
        transition: 0.4s;
        margin: 8px 0;
      }

      input[type="submit"]:hover {
        background: #006653;
      }
    </style>
  </head>
  <body>
    <section class="header">
      <nav>
        <div class="spital-title">Healify</div>
        <div class="nav-links">
          <ul>
            <li><a href="home.html">BALLINA</a></li>
            <li><a href="about.html">RRETH NESH</a></li>
            <li><a href="sherbimet.html">SHERBIMET</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="contactss.html">KONTAKTI</a></li>
            <li><a href="loginii.html">KYÇU</a></li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- Container per 2 format  -->
    <div class="container">
      <input type="checkbox" id="check" />
      <div class="first-page">
        <header class="resi">Reset Password</header>
        <!-- forma per nr telefonit -->
        <form>
          <label for="phone" style="color: white; margin: 15px"
            >Enter your phone number: <br
          /></label>
          <input type="text" id="phone" name="phone" value="+383" required />
          <div class="signup">
            <label for="check">Next</label>
          </div>
        </form>
      </div>
      <!-- forma per konfirmim -->
      <div class="second-page">
        <header class="resi">Enter Code</header>
        <!-- pjesa e "timerit" kishe per konfirmim tkodit -->
        <div
          id="timer"
          style="
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 18px;
          "
        >
        </div>
        <form>
          <label for="code" style="color: white; margin: 15px"
            >Enter the code sent to your phone:</label
          >
          <input
            type="text"
            id="code"
            name="code"
            placeholder="Enter Code"
            required
          />
          <input type="submit" class="button" value="Verify" />
          <div class="signup">
            <label for="check">Back</label>
          </div>
        </form>
      </div>
    </div>

    <script>
        const kodi_aktivizimit = Math.floor(Math.random()*10000).toString().padStart(4,"0"); // Gjenerimi i kodit te aktivizimit

        // Funksioni per timer
        function startTimer(duration, display) {
          let timer = duration,
            seconds;
          const interval = setInterval(function () {
            seconds = parseInt(timer % 60, 10);
        
            display.textContent = seconds;
            if (seconds === 51) {
              alert("Kodi per rikthim te password-it eshte " + kodi_aktivizimit);
            }
            if (--timer < 0) {
              clearInterval(interval);
              location.reload() //refresh eban faqen
            }
          }, 1000);
        }
        
        // Fillimi i timer-it kur aktivizohet divi2
        document.getElementById("check").addEventListener("change", function () {
          if (this.checked) {
            const display = document.getElementById("timer");
            startTimer(60, display);
          }
        });
        
        // Verifikimi i kodit te aktivizimit
        document.querySelector("input[type='submit']").addEventListener("click", function (event) {
          event.preventDefault(); // Parandalon rifreskimin e faqes pas submit
          const kodi = document.querySelector("#code").value;
          if (parseInt(kodi) == kodi_aktivizimit) {
            alert("Kodi eshte i sakte!");
          } else {
            alert("Kodi eshte i gabuar, rifreskoni faqen.");
          }
        });
        
    </script>
  </body>
</html>
