<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contactss.css">

    <style>
        .social-links{
            display: flex;
            justify-content: center;
            gap: 50px;
            background-color: #1c1c1c;
        }
        .social-box{
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .social-box a{
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            background-color: rgba(255, 255, 255,0.05);
            color: white;
            font-size: 2rem;
            text-align: center;
            border-radius: 50%;
            transition: all 0.3 ease-in-out;
            position: relative;
            overflow: hidden;
            box-shadow: o 4px 6px rgba(0,0,0,0.2);
        }
        /*efektet kur e bojna hover */
        .social-box a:hover{
            background: linear-gradient(80deg, #0449d49c, #52abd8);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
            transform: scale(1.2) rotate(360deg);
            transition: transform 0.6s ease-in-out, background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .social-box span{
            font-size: 1rem;
            color: #0449d4;
            margin-top: 10px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease-in-out;
        }
        .social-box a:hover + span {
            opacity: 1;
            transform: translateY(0);
        }
        .social-box a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150%;
            height: 150%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.4s ease-in-out;
        }
        .social-box a:hover::before {
             transform: translate(-50%, -50%) scale(1);
        }
        #qyteti{
            margin-right: 25px;
        }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <!-- kena me vendos ne i logo -->
            <div class="spital-title"> Healify </div>
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

    <section class="container">
    <h1 style="color: white">Kontakti</h1>
    <!-- perdorimi i variablave globale -->
        <form class="contact-form" method="POST">
            <h3>CAKTO TERMININ</h3>
            <div class="form-group">
                <input type="text" id="emri" name="emri" placeholder="Emri" required>
            </div>
            <div class="form-group">
                <input type="text" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="tel" id="mobile" name="tel" placeholder="Tel" pattern="0\d{8}" required> 
            <div class="form-group">
                <input type="date" id="date" >
            </div> 
                <textarea rows="5" placeholder="Specifikat e terminit" required></textarea>
                <button type="submit">Submit</button>
               <!-- datalist -->
                <input list="qytetet" id="qyteti" name="qyteti" placeholder="Zgjidh qytetin" required>
                <datalist id="qytetet">
                    <option value="Prishtinë">
                    <option value="Kaqanik">
                    <option value="Deqan">
                </datalist>
        </form>
        </div>
    </section>
    
    <section class="location-section" style="background-color: #1c1c1c;">
        <h1 style="color:white">Kontakto ne pikat tona</h1>
        <pre> Kontaktoni pikat tona në lokacionet tona kryesore, ku ofrojmë kujdes shëndetësor me fokus në besueshmëri, 
            cilësi të lartë, dhe shërbim të përkushtuar për çdo pacient</pre>
        <button id="toggleTableButton" style="margin-top: 20px;">Shfaq Tabelën</button>
        <div class="tabela">
            <table width="680" cellspacing="0" cellpadding="15">
                <tr>
                    <th colspan="6">Informacionet ne lokacione te dryshme</th>
                </tr>
                <tr>
                    <td colspan="2"><a href="https://www.google.com/maps/place/Pristina/@42.6701592,21.1576085,13.91z/data=!4m6!3m5!1s0x13549ee605110927:0x9365bfdf385eb95a!8m2!3d42.6629138!4d21.1655028!16zL20vMDFueWhs?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D">Prishtine</a></td>
                    <td colspan="2"><a href="https://www.google.com/maps/place/Kacanik/@42.233118,21.2334327,14z/data=!3m1!4b1!4m6!3m5!1s0x13547a9e71226915:0x5c7d4224c8cdc228!8m2!3d42.2278811!4d21.2568575!16zL20vMDRyZ2hx?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D">Kaqanik</a></td>
                    <td colspan="2"><a href="https://www.google.com/maps/place/Desan/@42.5368862,20.2738404,14z/data=!3m1!4b1!4m6!3m5!1s0x135255051b92477b:0x7f97d3d31a733b3f!8m2!3d42.5403276!4d20.2883251!16zL20vMDk3amMz?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D">Deçan</a></td>
                </tr>
                <tr>
                    <td >Email</td>
                    <td><a href="mailto:healify-pr.uni-pr.edu">healify-pr@gmail.com</a></td>
                    <td>Email</td>
                    <td><a href="mailto:healify-pr.uni-pr.edu">healify-kaqanik@gmail.com</a></td>
                    <td>Email</td>
                    <td><a href="mailto:healify-pr.uni-pr.edu">healify-deçan@gmail.com</a></td>
                </tr>
                <tr>
                    <td>Tel</td>
                    <td class="number">044-123-456</td>
                    <td>Tel</td>
                    <td class="number">045-789-012</td>
                    <td>Tel</td>
                    <td class="number">049-987-654</td>
                </tr>
                <tr>
                    <td colspan="6">Healify Clinic</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="social-links">
        <div class="social-box">
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <span><b>Facebook</b></span>
        </div>
        <div class="social-box">
            <a href="https://www.instagram.com" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <span><b>Instagram</b></span>
        </div>
        <div class="social-box">
            <a href="https://www.twitter.com" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
            <span><b>Twitter</b></span>
        </div>
        <div class="social-box">
            <a href="mailto:info@klinika.com" target="_blank">
                <i class="fa fa-envelope"></i>
            </a>
            <span><b>Email</b></span>
        </div>
    </section>

    <section class="footer">

        <div class="icons">
          <p style="color: #d5d2d2">&copy; 2025 Healify | Të gjitha të drejtat e rezervuara</p>

      </div>

</section>

<?php
// Përdorimi i variablave globale dhe klasave
class Kontakt {
    public $emri;
    public $mbiemri;
    public $email;
    public $tel;
    public $date;
    public $qyteti;
    public $specifikimi;

    // Konstruktor
    public function __construct($emri, $mbiemri, $email, $tel, $date, $qyteti, $specifikimi) {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->tel = $tel;
        $this->date = $date;
        $this->qyteti = $qyteti;
        $this->specifikimi = $specifikimi;
    }
    // Destruktori
    public function __destruct() {
        // Pastrimi i burimeve kur objekti shkatërrohet
        echo "Objekti u shkatërrua.";
    }
}

// Kontrollimi i formës nëse është dërguar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Përdorimi i variablave globale
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $qyteti = $_POST['qyteti'];
    $specifikimi = $_POST['specifikimi'];

    // Krijimi i një objekti të klasës Kontakt
    $kontakt = new Kontakt($emri, $mbiemri, $email, $tel, $date, $qyteti, $specifikimi);
    echo "<script>alert('Termini është dërguar me sukses!');</script>";
}
?>
<script>
   document.getElementById('toggleTableButton').addEventListener('click', function() {
    const tabela = document.querySelector('.tabela');
    tabela.style.display = 'flex';  // Përdor 'flex' për të mbajtur qëndrimin qendror
    setTimeout(() => {
        tabela.style.opacity = 1;  // Bëje tabelën të dukshme me fade-in
    }, 10);  // Vonesa minimale për efekt

    this.style.display = 'none';  // Fshih butonin pasi të klikohet
});
</script>

    
</body>
</html>