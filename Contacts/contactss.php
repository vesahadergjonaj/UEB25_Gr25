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
         .container{
    min-height: 80vh;
    background: #000;
    display: flex;
    justify-content: flex-end; /*e qet ka ana e djatht*/
    align-items: center;
    background: url('../Figurat/bg.figC.jpg') no-repeat center center/cover;
    position: relative;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}   
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition:0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;

} 
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 15px; /*ja 15 ja 16*/
}

nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between ;
    align-items: center;
}
nav img{
    width: 150px;
}
.spital-title {
    font-size: 25px; 
    font-weight: 600; 
    color: #f4f4f4; 
    margin-left: 20px; 
    text-align: left;
}
.header {
  position: absolute; /* Vendos navbar mbi background image */
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10; /* Jep prioritet të lartë mbi elementët e tjerë */
}
.container form{
    width: 500px;
    height: 450px;
    display: flex;
    justify-content: center;
    box-shadow: 5px 5px 10px rgb(65, 97, 202);
    border-radius: 15px;
    background: rgba(66, 56, 56, 0);
    backdrop-filter: blur(15px);
    flex-wrap: wrap;
    margin-right: 80px;
    margin-top: 30px;
}
.container form .name-fields input{
    width: 48%;
}
.container form h3{
    color: white;
    font-weight: 500;
    margin-top: 20px;
    width: 500px;
    text-align: center;
}

.container form input{
    width: 200px;
    height: 40px;
    padding-left: 10px;
    outline: none;
    border: none;
    font-size: 15px;
    color: white;
    margin-bottom: 10px;
    background: none;
    border-bottom: 2px solid #fff;
}
.container form input::placeholder{
    color: #fff;
}
.container form #mbiemri, .contact-form #mobile{
    margin-left: 20px;
}
.container form textarea{
    background: none;
    border: none;
    border-bottom: 2px solid #fff;
    color: white;
    font-weight: 200;
    font-size: 15px;
    padding: 10px;
    outline: none;
    min-width: 450px;
    max-width: 600px;
    min-height: 100px;
    max-height: 30px;
}
.container form textarea::placeholder{
    color: white;
}
.container form button{
    background-color: #0b2784;
    color: white;
    border: none;
    border-radius: 20px;
    width: auto;
    padding: 12px 40px;
    margin: 0 auto;
    font-size: 16px;
    cursor: pointer;
    transition: backgorund-color 0.3s ease;
    align-self: center; /*i mundeson butonit te vendoset ne mes*/
    display: block; /* e bon butonin element block */
}
.container form button:hover{
    box-shadow: 0 4px 50px rgba(3, 24, 56, 0.3), 0 0 15px rgba(12, 59, 97, 0.5);
    transform: scale(1.05); /* rrit butonin kur bon hover */
}
.container form input:hover, 
.container form textarea:hover {
    border-bottom: 2px solid #da552c; /* Ndryshoni ngjyrën e kufirit */
}
.container h1{
    position: absolute;
    bottom: 100px; /* E vendos në fund, me hapësirë prej 20px */
    left: 100px;   /* E vendos në të majtë, me hapësirë prej 20px */
    color: white; /* Opsional, për të siguruar kontrast të mirë */
    font-size: 24px;
    font-size: 4em;
}

.location-section {
    display: flex;
    flex-direction: column; /* Siguron që elementet të jenë njëri nën tjetrin */
    justify-content: center; /* Vendos elementët vertikalisht në qendër */
    align-items: center; /* Vendos elementët horizontalisht në qendër */
    min-height: 80vh; /* Përfshin lartësinë e plotë të ekranit */
    background: rgba(98, 94, 94, 0.1); /* Opsionale: mund ta ndryshoni sipas dëshirës */
    text-align: center; /* Qendron tekstin brenda elementit */
}
.location-section h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 2px;
    text-align: center;
    font-weight: 600;
    letter-spacing: 1px;
}
.location-section pre{
    margin-bottom: 20px;
}
.tabela {
    display: flex;
    justify-content: center;
    align-items: center; 
    width: 100%; 
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
table {
    width: 80%;
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}
table, th, td{
    border: 2px solid #1c1c1c;
    border-collapse: collapse;
}
th, td {
    padding: 15px 20px;
    text-align: center;
}
th {
    background-color: rgba(4, 73, 212, 0.6);
    color: #fff;
    font-size: 16px;
}
.tabela td a {
    color: #d0dbdd;
    text-decoration: none;
    font-weight: 500;
}
.tabela td a:hover{
    color:#365ddd;
}
.tabela .number{
    color: #d0dbdd;
    text-decoration: none;
    font-weight: 500;
}
#toggleTableButton {
    background-color: #0b2784;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}
#toggleTableButton:hover {
    background-color: #365ddd;
}

.footer{
    background-color: #1c1c1c;
    width: 100%;
    text-align: center;
    padding: 30px 0;

}
.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}
pre{
    color: rgba(255, 255, 255,0.6);
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
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
                    <li><a href="/UEB25_GR25/home.php">BALLINA</a></li>
                    <li><a href="/UEB25_GR25/about.php">RRETH NESH</a></li>
                    <li><a href="/UEB25_GR25/Sherbime/sherbimet.php">SHERBIMET</a></li>
                    <li><a href="/UEB25_GR25/Blog/blog.php">BLOG</a></li>
                    <li><a href="/UEB25_GR25/Contacts/contactss.php">KONTAKTI</a></li>
                    <li><a href="/UEB25_GR25/loginii.php">KYÇU</a></li>
    
                </ul>
            </div>
        </nav>
    </section>

    <section class="container">
    <h1 style="color: white">Kontakti</h1>
    <!-- perdorimi i variablave globale -->
        <form class="contact-form" method="POST" action="contactss.php">
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
                <input type="date" name="date" id="date" >
            </div> 
                <textarea name="specifikimi" rows="5" placeholder="Specifikat e terminit" required></textarea>
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