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
    <?php

$klinika = "Healify Clinic";
$pershkrim = "Ne kujdesemi për pacientët me përkushtim.";

define("VENDNDODHJA", "Prishtinë");



function pershendetja($emer) {
    return "Mire se vini në Healify, " . strtoupper($emer) . "!";
}



echo "<div style='background:#f0f8ff; padding:10px; margin:20px 0; border-left:5px solid #2196F3'>";
echo "<h3>" . pershendetja('Stafi') . "</h3>";
echo "<p><strong>Klinika:</strong> $klinika</p>";
echo "<p><strong>Përshkrimi:</strong> $pershkrim</p>";
echo "<p><strong>Lokacioni:</strong> " . VENDNDODHJA . "</p>"; // permes konstantes lart

echo "</div>";
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
                <img src="../Figurat/sh1bg.png" alt="foto e aboutus"> 
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
    
    <hr>

    
    
<hr>
    <!--Programet per parandalim-->

    <section>
        <h2 style="text-align: center; margin-top: 20px;">PROGRAMET PËR PARANDALIM</h2>
        <section class="prevention-section">
          <div class="prevention-content">
            <div class="prevention-text">
              <h3>Qëndroni të Shëndetshëm</h3>
              <p>
                Ne jemi të përkushtuar të ofrojmë programe që ndihmojnë në parandalimin e
                sëmundjeve dhe përmirësimin e cilësisë së jetës për të gjithë.
              </p>
              <button class="prevention-button" id="showMoreBtn">Mëso më shumë</button>
            </div>
            <div class="prevention-image">
              <img src="../Figurat/parandalim.png" alt="Ilustrim Shëndeti" class="prevention-img" />
            </div>
          </div>
          <div class="prevention-info" id="info">
            <h2>Detaje mbi Programet</h2>
            <ul>
              <li><b>Kontrolle të rregullta mjekësore:</b> Monitorim i vazhdueshëm për të kapur problemet në faza të hershme.</li>
              <li><b>Vaksinime dhe imunizime:</b> Sigurimi i mbrojtjes kundër sëmundjeve infektive.</li>
              <li><b>Këshillime për stilin e jetës:</b> Udhëzime për ushqim të shëndetshëm dhe aktivitet fizik.</li>
              <li><b>Programe ndërgjegjësimi:</b> Edukimi mbi rëndësinë e kujdesit shëndetësor.</li>
            </ul>
          </div>
        </section>
      
        <script>
          const button = document.getElementById('showMoreBtn');
          const infoDiv = document.getElementById('info');
      
          button.addEventListener('click', function () {
            if (infoDiv.style.display === 'none' || infoDiv.style.display === '') {
              infoDiv.style.display = 'block';
              button.textContent = 'Fshih Detajet';
            } else {
              infoDiv.style.display = 'none';
              button.textContent = 'Mëso më shumë';
            }
          });
        </script>
      </section>
      

    <hr>
      <!--OFERTAAA-->
      <section class="healify-section">
        <h2 style="text-align: center; margin-top: 20px;">HEALIFY CLINIC - OFERTA SPECIALE  </h2>
        <p class="healify-description">Shfrytëzoni ofertat tona speciale për shëndetin tuaj. Plotësoni formën për të mësuar më shumë!</p>
    
        <!-- Hapësira për figurën -->
        <div class="healify-image-container">
            <img src="../Figurat/zbritje.png" alt="Healify Clinic" class="healify-image">
        </div>
    
        <div class="healify-warning">
            <button class="healify-btn" id="warning-btn">Oferta</button>
        </div>
    
        <div class="healify-offers">
            <h3 class="healify-subtitle">Informacion mbi Ofertat</h3>
            <p id="variable-output"></p>
            <ul id="array-output" class="healify-list"></ul>
        </div>
    
        <div class="healify-interactive">
            <h3 class="healify-subtitle">Info Personale</h3>
            <form class="healify-form">
                <label for="name" class="healify-label">Emri:</label>
                <input type="text" id="name" class="healify-input">
                
                <label for="service" class="healify-label">Shërbimi:</label>
                <select id="service" class="healify-input">
                    <option value="checkup">Kontroll Mjekësor</option>
                    <option value="blood-test">Analiza e Gjakut</option>
                    <option value="family-package">Paketa Familjare</option>
                </select>
    
                <label for="age" class="healify-label">Mosha:</label>
                <input type="number" id="age" class="healify-input">
                
                <button type="button" class="healify-btn" id="submit-btn">Paraqit Rezultatet</button>
            </form>
            <div id="results-output" class="healify-output"></div>
        </div>
    </section>
    
    <hr>

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