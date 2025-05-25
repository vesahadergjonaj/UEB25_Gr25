
<?php
session_start();
$error = $sukses = "";

// Kategoritë për select box
$kategorite = [
    "Ushqyerje e shëndetshme",
    "Aktivitet fizik",
    "Shëndet mendor",
    "Parandalim sëmundjesh",
    "Kujdes për fëmijët"
];

if (isset($_POST['dergo'])) {
    $emri = trim($_POST['emri']);
    $email = trim($_POST['email']);
    $kategoria = $_POST['kategoria'] ?? '';
    $pyetja = trim($_POST['pyetja']);

    // Kontroll për input bosh
    if ($emri && $email && $kategoria && $pyetja) {
        // SESSION – ruajmë emrin
        $_SESSION['emri'] = $emri;
        // COOKIE – ruajmë kategorinë e fundit të zgjedhur
        setcookie('kategoria_fundit', $kategoria, time() + 3600*24*30, "/");

        // FILE – ruajmë kërkesën në fajll
        $file = fopen("keshilla_personalee.txt", "a");
        if ($file) {
            fwrite($file, "Emri: $emri | Email: $email | Kategoria: $kategoria | Pyetja: $pyetja\n");
            fclose($file);
            $sukses = "Kërkesa për këshillë u dërgua me sukses!";
        } else {
            $error = "Gabim gjatë ruajtjes në fajll!";
        }
    } else {
        $error = "Ju lutem, plotësoni të gjitha fushat!";
    }
}

$emriSession = $_SESSION['emri'] ?? '';
$kategoriaCookie = $_COOKIE['kategoria_fundit'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website per shendetsi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="aboutus.js" defer></script>
    <link rel="stylesheet" href="aboutus.css">

    
   
</head>
<style>
    .keshilla-form {
        max-width: 330px;
        margin: 25px auto 10px auto;
        padding: 16px 13px;
        border-radius: 12px;
        background: #b2ece9; /* ngjyrë turquoise shumë e lehtë */
        box-shadow: 0 2px 12px 0 rgba(30, 60, 80, 0.08);
    }
    .keshilla-form h3 {
        text-align: center;
        color: #147e7b;
        margin-bottom: 12px;
        font-size: 1.1em;
        font-weight: bold;
    }
    .keshilla-form label {
        display: block;
        margin: 7px 0 2px 0;
        color: #147e7b;
        font-weight: 500;
        letter-spacing: 0.5px;
        font-size: 0.98em;
    }
    .keshilla-form input[type="text"],
    .keshilla-form input[type="email"],
    .keshilla-form select,
    .keshilla-form textarea {
        width: 100%;
        padding: 5px 8px;
        border: none;
        border-radius: 5px;
        font-size: 0.98em;
        margin-bottom: 4px;
        background: #f5ffff;
    }
    .keshilla-form textarea {
        min-height: 38px;
        resize: vertical;
    }
    .keshilla-form button {
        margin-top: 8px;
        padding: 7px 0;
        width: 100%;
        background: #147e7b;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        font-weight: bold;
        transition: background .2s;
    }
    .keshilla-form button:hover {
        background: #19a5a3;
    }
    .keshilla-form .msg-success {
        color: #257246;
        background: #e3f7e9;
        padding: 5px 7px;
        margin-bottom: 9px;
        border-radius: 5px;
        text-align: center;
        font-size: 0.97em;
    }
    .keshilla-form .msg-error {
        color: #8d1919;
        background: #faeaea;
        padding: 5px 7px;
        margin-bottom: 9px;
        border-radius: 5px;
        text-align: center;
        font-size: 0.97em;
    }
</style>
<body>
         


    <section class="sub-header">
        <nav>
            <div class="spital-title"> Healify </div>
        
            <div class="nav-links">
                <ul>
                    <li><a href="../Home/home.php">BALLINA</a></li>
                    <li><a href="../About/about.php">RRETH NESH</a></li>
                    <li><a href="../Sherbime/sherbimet.php">SHERBIMET</a></li>
                    <li><a href="../Blog/blog.php">BLOG</a></li>
                    <li><a href="../Contacts/contactss.php">KONTAKTI</a></li>
                    <li><a href="../Login/loginii.php">KYÇU</a></li>
    
                </ul>
            </div>
        </nav>
       <h1>About Us</h1>
    
    </section>
    
?>
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Healify Clinic</h1>
                <p>Në Healify Clinic, ne besojmë se shëndeti është pasuria më e madhe. Klinika jonë është krijuar 
                    për të ofruar kujdes shëndetësor të personalizuar dhe të avancuar, duke kombinuar teknologjinë më të fundit me një qasje të ngrohtë dhe njerëzore. <br>Ne jemi këtu për të mbështetur pacientët tanë në çdo hap të rrugës drejt një jete më të shëndetshme dhe më të lumtur.
                    <br>
                    Për të zbuluar gamën tonë të shërbimeve që mbulojnë gjithçka nga diagnozat e avancuara deri te programet për mirëqenie dhe trajtime specifike, eksploroni më tej për të gjetur zgjidhjen që i përshtatet më së miri nevojave tuaja. Klikoni më poshtë për të zbuluar më shumë!</p>
                <a href="../Sherbime/sherbimet.php" class="hero-btn blue-btn" target="_blank">SHERBIMET</a>
            </div>
            <div class="about-col">
<img src="../Figurat/bgfig3.png" alt="foto e aboutus" />
            </div>
        </div>

    </section>

    <section style="padding: 40px; background-color: #f9f9f9; border-radius: 10px;">
        <h2 style="text-align: center; margin-bottom: 20px;">PSE TË ZGJIDHNI HEALIFY CLINIC?</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-around;">
            <!-- Arsyeja 1 edhe mja ndrru figuren duhet beesoj-->
            <div style="flex: 1; min-width: 250px; text-align: center;">
                <h3 class = "viza" style="font-size: 18px; margin-bottom: 10px;">Kujdes i Personalizuar</h3>
                <p>
                    Çdo pacient trajtohet si individ i veçantë, me një plan kujdesi që i përshtatet nevojave dhe synimeve të tij.
                </p>
                <img src="../Figurat/kujdesipersonalizum.png" alt="Kujdes i Personalizuar" style="width: 100%; margin-bottom: 10px;">
                
                
            </div>
    
            <!-- Arsyeja 2 -->
            <div style="flex: 1; min-width: 250px; text-align: center;">
                <h3 class = "viza" style="font-size: 18px; margin-bottom: 10px;">Teknologji Moderne</h3>
                <p>
                    Pajisjet dhe teknologjitë tona janë të fundit në treg, duke siguruar trajtime të sakta dhe efektive.
                </p>
                <img src="../Figurat/tinovative.jpg" alt="Teknologji Moderne" style="width: 75%; margin-bottom: 10px;">
               
            </div>
    
            <!-- Arsyeja 3 -->
            <div style="flex: 1; min-width: 250px; text-align: center;">
                <h3 class = "viza" style="font-size: 18px; margin-bottom: 10px;">Ekip i Dëshmuar</h3>
                <p>
                    Specialistët tanë janë me përvojë të gjatë dhe të përkushtuar për të ofruar kujdesin më të mirë.
                </p>
                <img src="../Figurat/stafi.png" alt="Ekip i Dëshmuar" style="width: 100%; margin-bottom: 10px;">
                
            </div>
        </div>
    </section>
    
    

<div class="keshilla-form">
    <h3>Porosit nje keshille te personalizuar nga stafi</h3>
    <?php if ($error) echo "<div class='msg-error'>$error</div>"; ?>
    <?php if ($sukses) echo "<div class='msg-success'>$sukses</div>"; ?>
    <form method="post" autocomplete="off">
        <label>Emri:</label>
        <input type="text" name="emri" required value="<?=htmlspecialchars($emriSession)?>">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Kategoria e keshilles:</label>
        <select name="kategoria" required>
            <option value="">Zgjidh...</option>
            <?php foreach ($kategorite as $kat): ?>
                <option <?=($kategoriaCookie==$kat)?'selected':''?>><?=htmlspecialchars($kat)?></option>
            <?php endforeach; ?>
        </select>
        <label>Pyetja ose shqetesimi juaj:</label>
        <textarea name="pyetja" required></textarea>
        <button type="submit" name="dergo">Dergo kerkesen</button>
    </form>
</div>


        <!-- historuku  -->
        <section class="section-historiku">
            <h2 style="text-align: center; margin-top: 20px;">HISTORIKU I HEALIFY CLINIC    </h2>
            <div class="historiku-content">
                <p class="section-historiku-text">
                    Healify Clinic nisi me një vizion të thjeshtë për të ofruar kujdes shëndetësor cilësor dhe të përkushtuar. 
                    Falë përpjekjeve të palodhura dhe fokusit në përmirësim të vazhdueshëm, klinika ka evoluar në një qendër moderne 
                    që kombinon teknologjinë më të fundit me një ekip të përkushtuar specialistësh. Përmes investimeve në inovacion 
                    dhe përmirësimit të shërbimeve, Healify Clinic ka arritur të plotësojë dhe tejkalojë pritshmëritë e pacientëve, 
                    duke u bërë një pikë referimi për shëndetin në komunitet. Ndërsa vazhdon të rritet, klinika mbetet e përkushtuar 
                    ndaj qëllimit për të ofruar standardet më të larta në çdo aspekt të kujdesit shëndetësor.
                </p>
                <div class="tree-container">
                    <div class="seed"></div>
                    <div class="stem"></div>
                    <div class="leaves"></div>
                </div>
            </div>
            <!-- Ikona që simbolizon suksesin -->
            <div class="success-icon">
                <i class="fas fa-trophy"></i>
                <p>Një histori suksesi në kujdesin shëndetësor</p>
            </div>
        </section>
          
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // tu rrit ajo te historiku
            setTimeout(function () {
                $(".stem").css("height", "200px"); // Stem rritet
            }, 500);
            setTimeout(function () {
                $(".leaves").css({
                    width: "100px",
                    height: "100px",
                    opacity: 1, // Leaves shfaqett
                });
            }, 2500);
        });
    </script>



    <!--Section i (Fundit) FOOTER-->
        <section class="footer">
                <h3>About us</h3>
                <p>Në Healify Clinic, përkushtimi ynë ndaj kujdesit shëndetësor cilësor është bazuar në ekspertizë <br>
                përvojë dhe teknologji të avancuar. Me një ekip të përkushtuar profesionistësh,
                </p>
                <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
    
                </div>
    
        </section>


        
        

</body>
</html>