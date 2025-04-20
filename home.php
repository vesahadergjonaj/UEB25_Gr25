<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website per shendetsi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="homestyle.css">
   
</head>


<body>

<section class="header">
    <nav>
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
   <div class="text-box">
    <h1>Healify Clinic</h1>
    <p>Kujdesemi për shëndetin tuaj me përkushtim dhe profesionalizëm,<br> duke ofruar zgjidhje të avancuara mjekësore dhe një qasje të përqendruar te mirëqenia juaj. Në Healify Clinic, shëndeti juaj është prioriteti ynë.</p>
    <a href="about.php"class="hero-btn">Kliko për më shumë</a>
   </div>

</section>
<!--me qka mirremi-->
<section class="Ofrojm"> <!--Cka ofrojme ne?-->
    <h1>ÇKA OFROJMË NE?</h1>


                <?php
            $sherbimet = ["Diagnostikim i avancuar", "Trajtime të personalizuara", "Parandalim dhe mirëqenie"];

            echo "<ul style='margin: 20px 0; padding: 10px; background-color: lightblue; border-left: 5px solid lightblue; border-radius: 10px;'>";
            foreach ($sherbimet as $sherbim) {
                echo "<li style='padding: 5px 0; font-weight: bold;'>$sherbim</li>";
            }
            echo "</ul>";

            ?>

    <p>Healify Clinic është e dedikuar për të ofruar kujdes shëndetësor cilësor dhe të personalizuar.
         Me një ekip profesionistësh të përkushtuar dhe teknologji moderne, ne sigurojmë zgjidhje gjithëpërfshirëse për shëndetin dhe mirëqenien tuaj.</p>
    <div class="row"> <!-- Krijo nje kontejner "row" per te gjitha kolonat -->
        <div class="service-col">
            <h3>Diagnostikim i avancuar</h3>
            <p>Analiza laboratorike precize për një gamë të gjerë sëmundjesh. <br>
                Imazheri moderne si ultratinguj, radiografi dhe rezonancë magnetike (MRI). <br>
                Kontrolle të specializuara për gjendje specifike, nga sëmundjet kardiovaskulare deri te çrregullimet metabolike.</p>
        </div>
        <div class="service-col">
            <h3>Trajtime të personalizuara</h3>
            <p> Konsultime të Detajuara dhe Analiza Individuale:
                Gjithçka fillon me një konsultë të detajuar dhe analizë të thelluar, ku mbledhim informacion të plotë për gjendjen shëndetësore të pacientit, historinë familjare dhe faktorët e jetesës.
                
        </div>
        <div class="service-col">
            <h3>Parandalim dhe mirëqenie</h3>
            <p>Kontrolle të Rregullta dhe Check-up të Personalizuar:
                Ne ofrojmë programe të rregullta të kontrollit të shëndetit për të identifikuar çdo problem potencial në fazat e hershme. Check-up-et e personalizuara ndihmojnë në parandalimin e sëmundjeve dhe në mbajtjen e një shëndeti të fortë dhe të qëndrueshëm.</p>
        </div>
    </div>
</section>
<!--Section i 3t-->
<section class="camp">
    <h1>LOKACIONET</h1>

            <?php
        $lokacionet = [
            ["Prishtinë", "Rr. Nënë Tereza, Nr. 45", "+383 44 123 456"],
            ["Kaçanik", "Rr. Dëshmorët e Kombit, Nr. 12", "+383 45 789 012"],
            ["Deçan", "Rr. Luan Haradinaj, Nr. 8", "+383 49 987 654"]
        ];

        echo "<div style='margin: 20px 0; padding: 15px; background-color: lightblue; border-left: 5px solid lightblue; border-radius: 10px;'>";
        foreach ($lokacionet as $lok) {
            echo "<p><strong>$lok[0]</strong> - $lok[1] | Tel: $lok[2]</p>";
        }
        echo "</div>";

        ?>

    <p>Me prezencë në Prishtinë, Kaçanik dhe Deçan, ne ofrojmë shërbime shëndetësore cilësore dhe të përshtatshme për të gjitha komunitetet,<br> duke garantuar kujdes profesional dhe qasje të lehtë në të gjitha zonat kryesore.</p>
    <div class="row">
        <!-- Prishtina -->
        <div class="camp-col">
            <div class="image-container">
                <img src="Figurat/prishtina.png">
                <div class="layer">
                    <h3>PRISHTINË</h3>
                </div>
            </div>
            <address>
                <p>Rr. Nënë Tereza, Nr. 45</p>
                <p>Prishtinë, Kosovë</p>
                <p>Tel: +383 44 123 456</p>
            </address>
        </div>
        
        <!-- Kaçanik -->
        <div class="camp-col">
            <div class="image-container">
                <img src="Figurat/kacanik.png">
                <div class="layer">
                    <h3>KAÇANIK</h3>
                </div>
            </div>
            <address>
                <p>Rr. Dëshmorët e Kombit, Nr. 12</p>
                <p>Kaçanik, Kosovë</p>
                <p>Tel: +383 45 789 012</p>
            </address>
        </div>
        
        <!-- Deçan -->
        <div class="camp-col">
            <div class="image-container">
                <img src="Figurat/decani.png">
                <div class="layer">
                    <h3>DEÇAN</h3>
                </div>
            </div>
            <address>
                <p>Rr. Luan Haradinaj, Nr. 8</p>
                <p>Deçan, Kosovë</p>
                <p>Tel: +383 49 987 654</p>
            </address>
        </div>
    </div>
</section>
<?php
echo "<div style='margin: 30px 0; padding: 20px; background-color: lightblue; border-left: 6px solid lightblue; border-radius: 12px;'>";


        //sort

$emrat = ["Arta", "Leon", "Blerina", "Don"];
sort($emrat);

echo "<h3 style=''>1. Emrat e pacientëve :</h3><ul>";
foreach ($emrat as $emri) {
    echo "<li>$emri</li>";
}
echo "</ul>";

    //arsort

$vleresime = [
    "Leon" => 5,
    "Erion" => 4,
    "Sara" => 3,
    "Arta" => 4
];
ksort($vleresime);

echo "<h3 style=''>2. Vlerësimet :</h3><ul>";
foreach ($vleresime as $emri => $nota) {
    echo "<li>$emri - $nota yje</li>";
}
echo "</ul>";

 //arsort

$pacientet = [
    "Diona" => 5,
    "Arben" => 4,
    "Leon" => 5,
    "Besart" => 3
];

arsort($pacientet);

echo "<h3 style=''>3. Paraqitjet :</h3><ul>";
foreach ($pacientet as $emri => $nota) {
    echo "<li>$emri – $nota herë</li>";
}
echo "</ul>";

echo "</div>";
?>


<!--Section i 4-te-->
<section class="reviews">


    <h1>VLERSIMET E PACIENTËVE</h1>
    <?php
        $vleresime = [
            "Leon Troni" => 5,
            "Erion Troni" => 4,
            "Agnesa Smakiqi" => 5,
        ];

        echo "<div style='margin: 20px 0; padding: 15px; background-color: #e3f2fd; border-left: 5px solid #2196f3; border-radius: 10px;'>";
        foreach ($vleresime as $emri => $nota) {
            echo "<p>$emri – <strong>$nota yje</strong></p>";
        }
        echo "</div>";

        ?>
    <p>Pacientët tanë vlerësojnë kujdesin e përkushtuar dhe profesionalizmin që ofrojmë.<br> Lexoni mendimet dhe përvojat e tyre për të kuptuar pse na besojnë për shëndetin e tyre.</p>


    <div class="row">
        <div class="reviews-col">
            <img src="Figurat/leo.jpg" alt="Foto Klientit">
            <div>
                <p>Shërbimi ishte i jashtëzakonshëm! Stafi ishte shumë profesional dhe i kujdesshëm gjatë gjithë kohës.
                     Do ta rekomandoj klinikën për kujdesin shëndetësor.</p>
                        <h3>Leon Troni</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

            </div>
        </div>
        <div class="reviews-col">
            <img src="Figurat/erii.png" alt="Foto Klientit">
            <div>
                <p>Një përvojë shumë pozitive! Ambienti i pastër dhe i organizuar mirë, ndërsa mjekët treguan përkushtim të madh.
                     Do të dëshiroja vetëm kohë më të shkurtër pritjeje.</p>
                        <h3>Erion Troni</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
</section>
 <!--Section i 5te tash ...-->
<section class="cta">
    <!-- <h1>NA KONTAKTONI ONLINE<br> NGA ÇDO CEP I BOTËS</h1> -->
     <h1>NA KONTAKTONI ONLINE<br> PREJ KUDO NË BOTË</h1>
    <a href="contactss.php" class="hero-btn">Na Kontaktoni</a>
 
</section>


<?php

    $ora = 21;

        if ($ora < 12) {
            $mesazhi = "🌅 Mirëmëngjes nga Healify!";
        } elseif ($ora < 18) {
            $mesazhi = "🌞 Mirëdita dhe mirë se vini!";
        } else {
            $mesazhi = "🌙 Mirmbrëma! Kujdesemi për ju edhe natën.";
        }

        $sherbimi = "familjar";

        switch ($sherbimi) {
            case "kontroll":
                $info = "Zgjodhët Kontroll Mjekësor.";
                break;
            case "analiza":
                $info = "Zgjodhët Analiza të Gjakut.";
                break;
            case "familjar":
                $info = "Zgjodhët Paketën Familjare të Healify.";
                break;
            default:
                $info = "Skeni zgjedhur asnjë shërbim.";
                break;
        }

        echo "<div style='background:lightblue; color:#333; padding:15px; margin:30px 0; border-radius:10px; border-left:5px solid lightblue; box-shadow:0 2px 8px rgba(0,0,0,0.1);'>";
        echo "<h3 style='margin-top:0;'>$mesazhi</h3>";
        echo "<p style='font-size:16px;'>$info</p>";
        echo "</div>";
?>

<!--Section i 6 (Fundit) FOOTER-->
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