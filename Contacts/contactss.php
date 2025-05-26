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
</head>
<body>
    <section class="header">
        <nav>
            <div class="spital-title"> Healify </div>
            <div class="nav-links">
                <ul>
                    <li><a href="/UEB25_GR25/Home/home.php">BALLINA</a></li>
                    <li><a href="/UEB25_GR25/About/about.php">RRETH NESH</a></li>
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
            </div>
            <div class="form-group">
                <input type="date" name="date" id="date" >
            </div> 
                <textarea name="specifikimi" rows="5" placeholder="Specifikat e terminit" required></textarea>
                <button type="submit">Submit</button>
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

class Kontakt {
    public $emri;
    public $mbiemri;
    public $email;
    public $tel;
    public $date;
    public $qyteti;
    public $specifikimi;

    public function __construct($emri, $mbiemri, $email, $tel, $date, $qyteti, $specifikimi) {
        $this->formatEmrinMbiemrin($emri, $mbiemri);

        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->tel = $tel;
        $this->date = $date;
        $this->qyteti = $qyteti;
        $this->specifikimi = $specifikimi;
    }
//percjellja permes references se funksionit edhe perdorimi i funksioneve me referenc
    private function formatEmrinMbiemrin(&$emri, &$mbiemri) {
        $emri = mb_convert_case(mb_strtolower($emri, 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
        $mbiemri = mb_convert_case(mb_strtolower($mbiemri, 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // me i mar te dhenat prej ajax
    $kontakt = new Kontakt(
        $_POST['emri'],
        $_POST['mbiemri'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['date'],
        $_POST['qyteti'],
        $_POST['specifikimi']
    );

    $conn = new mysqli("localhost", "root", "", "healify_final");
    if ($conn->connect_error) {
        die("Lidhja dështoi: " . $conn->connect_error);
    }

    $sql = "INSERT INTO terminet (emri, mbiemri, email, tel, date, qyteti, specifikimi)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
//perdorimi i sql injection prepared statement 
     $stmt->bind_param("sssssss",
        $kontakt->emri,
        $kontakt->mbiemri,
        $kontakt->email,
        $kontakt->tel,
        $kontakt->date,
        $kontakt->qyteti,
        $kontakt->specifikimi
    );

    if ($stmt->execute()) {
        echo "Termini u ruajt me sukses!";
    } else {
        echo "Gabim gjatë ruajtjes!";
    }

    $stmt->close();
    $conn->close();
}

?>
<script src="/UEB25_GR25/Contacts/contacts.js"></script>

    
</body>
</html>