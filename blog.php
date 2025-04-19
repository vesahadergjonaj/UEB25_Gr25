<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <style>
    *{
        margin: 0;
        padding: 0;
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
            color: #0449d49c;
            text-decoration: none;
            font-size: 16px; /*ja 15 ja 16*/
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
            color: #0449d49c; 
            margin-left: 20px; 
            text-align: left;
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-size: 15px;
        }
        .header {
           position: absolute; /* Vendos navbar mbi background image */
           top: 0;
           left: 0;
           width: 100%;
           z-index: 10; /* Jep prioritet të lartë mbi elementët e tjerë */
        }
        /* u desht me i shtu qito qe me mdal section lajmet posht se mka plas */
        .fillimi {
            position: relative;
            height: 80vh; /* ose një lartësi fikse si 500px */
            overflow: hidden; /* për të shmangur mbivendosjen */
        }
        .fillimi video {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           object-fit: cover;
           z-index: -1;
        }  

    .info {
        position: absolute;
        top: 50%;
        left: 20px;
        background-color: #0449d49c;
        transform: translateY(-50%); /*qikjo e mundson qe me nejt mir vertikalisht*/
        padding: 20px;
        border-radius: 10px;
        color: white;
        max-width: 1000px;
    }
    .info h3{
        font-size: 2rem;
        margin-bottom: 15px;
    }
    .info pre{
        font-size: 1rem;
        line-height: 1.5;
        margin: 0;
    }
    .lajmet {
        padding: 50px 20px;
        background-color: #1c1c1c;
    }
    .card-container{
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }
    .card{
        background-color: rgba(255, 255, 255,0.05);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.91);
        width: 400px;
        height: 380px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        opacity: 0; /* Kartat fillimisht janë të padukshme */
        transform: translateY(100px); /* Pozicioni i zhvendosur për efekt animimi */
        transition: opacity 0.5s ease, transform 0.5s ease; /* Efekti i animacionit */
        position: relative;
    } 
    .card:hover {
    box-shadow: 0 10px 20px rgba(33, 97, 246, 0.666); /* Shton hijen për thellësi */
    }

    .card.show {
    opacity: 1; /* Bëhet e dukshme kur klasa 'show' shtohet */
    transform: translateY(0); /* Rikthehet në pozicionin origjinal */
    }

    .card img{
        width: 100%;
        height: 120px;
        object-fit: cover;
        transition: transform 0.3s ease, filter 0.3s ease;
    }
    .card-content{
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .card-content h3{
        margin: 0;
        font-size: 18px;
        color: #4f81e59c; 
    }
    .card-content p{
        margin: 0;
        font-size: 14px;
        color: #b8b5b5;
        line-height: 1.5;
    }
    .card-content .read-more{
        margin-top: 10px;
        align-self: start;
        background-color: #0449d49c;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 5px;
        font-size: 14px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
    }
    .card-content .read-more:hover {
        background-color: #648fe49c;
    }

    .lajmet h1{
        font-size: 3em;
        text-align: center;
        margin-bottom: 50px;
    }
    .card img {
        transition: transform 0.3s ease, filter 0.3s ease, background-color 0.3s ease;
    }

    .card img:hover {
        filter: blur(1.5px); /* Efekti i mjegullimit */
        transform: scale(1.0); /* Efekti i zmadhimit */
        background-color: rgba(0, 123, 255, 0.6); /* Ngjyrë kalter mbi imazh */
    }
        .footer{
            background-color: #1c1c1c;
            width: 100%;
            text-align: center;
            padding: 30px 0;
            color:#b8b5b5;
        }
        .footer h4{
            margin-bottom: 25px;
            margin-top: 20px;
            font-weight: 600;
            color:#b8b5b5;
        }
        .podcastc {
        font-size: 3em;
        text-align: center;
        color: white;
        background-color: #1c1c1c;
        padding-top: 50px;;
    }
    .podcast-row {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: center;
        background-color: #1c1c1c;
        padding: 30px;
    }
    .player {
        position: relative;
        width: 350px;
        background: #2c2c2c;
        border-radius: 20px;
        color: white;
        padding: 20px;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .player:hover{
        box-shadow: 0 10px 20px rgba(33, 97, 246, 0.6);
        transform: scale(1.05);
    }
    .player .imgbox {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        border-radius: 15px;
    }
    .player .imgbox img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .player .content {
        margin-top: 15px;
    }
    .player h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    .player p {
        font-size: 1em;
        line-height: 1.5;
    }
    .player audio {
        width: 100%;
        margin-top: 10px;
        outline: none;
        border-radius: 10px;
    }


    </style>


</head>
<body>
    <section class="header">
        <nav>
            <div class="spital-title"> Healify </div>
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

    <section class="fillimi">

        <div class="info">
            <h3 style="color: white">Our blog</h3>
           
     <pre style="color: white">    Mirësevini në blogun "Healify"! Ky është një burim i shkëlqyer për
    këshilla shëndetësore dhe informacion të vlefshëm që mund t'ju ndihmojë
    të jetoni më shëndetshëm. Nëse kërkoni informacione për menaxhimin e kushteve
    kronike, përparimet mjekësore të fundit, ose thjesht dëshironi të përmirësoni jetën tuaj,
    jeni në vendin e duhur. Ekipi ynë i profesionistëve të shëndetësisë është këtu për t'ju mbështetur
    dhe për t'ju udhëzuar në rrugëtimin tuaj drejt mirëqenies. Bashkohuni me ne dhe bëhuni 
    pjesë e këtij udhëtimi të shëndetshëm!</pre>
    </div>

    <div video-box>
        <video src="video.mp4" autoplay muted loop>
            your file does not suport the vidoe tag
        </video>
    </section>

    <section class="lajmet">
        <h1 style="color: white">Lajmet e fundit</h1>
        <div class="card-container">
            <div class="card">
                <a href="blog1.html"><img src="Figurat/blog1.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>Why Regular Medical Checkups Are Essential for Your Health</h3>
                    <p>In today’s busy world, it’s easy to put off medical checkups, especially when you feel healthy. However, regular visits to your doctor...</p>
                    <a href="blog1.html" class="read-more">Read More</a>
                </div>
            </div>
            <div class="card">
                <a href="blog2.html"><img src="Figurat/blog2.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>How to Manage Chronic Conditions with Lifestyle Changes</h3>
                    <p>Living with a chronic condition can be challenging, but small, sustainable lifestyle changes can make a big difference...</p>
                    <a href="blog2.html" class="read-more">Read More</a>
                </div>
            </div>
            <div class="card">
                <a href="blog3.html"><img src="Figurat/blog3.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>Mindfulness Tips for a Calmer, Balanced Life</h3>
                    <p>We believe in the importance of nurturing not just the body, but also the mind. Mindfulness is a valuable tool that can help in maintaining....</p>
                    <a href="blog3.html" class="read-more">Read More</a>
                </div>
            </div>
            <div class="card">
                <a href="blog4.html"><img src="Figurat/blog4.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>Effective Prescription Management: Tips for Staying on Track</h3>
                    <p>Managing prescriptions effectively is crucial for maintaining good health, especially if you have a chronic condition...</p>
                    <a href="blog4.html" class="read-more">Read More</a>
                </div>
            </div>
            <div class="card">
                <a href="blog5.html"><img src="Figurat/blog5.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>Chronic Condition Management: How to Take Control of Your Health</h3>
                    <p>Managing chronic conditions requires a holistic approach to healthcare, focusing on long term well being and proactive...</p>
                    <a href="blog5.html" class="read-more">Read More</a>
                </div>
            </div>
            <div class="card">
                <a href="blog6.html"><img src="Figurat/blog6.png" alt="Medical Checkups"></a>
                <div class="card-content">
                    <h3>Disease Prevention – Small Steps, Big Impact</h3>
                    <p>In an era where chronic diseases are on the rise, taking proactive steps to prevent illness is more important than ever...</p>
                    <a href="blog6.html" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="podcast">
        <h1 class="podcastc">Podcastet e fundit</h1>
        <div class="podcast-row">
            <div class="player">
                <div class="imgbox">
                    <img src="Figurat/vitaminD.png" alt="Podcast Vitamin D">
                </div>
                <div class="content">
                    <h3>Përfitimet e Vitaminës D për Shëndetin</h3>
                    <p>Zbuloni se si vitamina D ndikon në mirëqenien tuaj dhe përse është e rëndësishme për kockat dhe sistemin imunitar.</p>
                </div>
                <audio src="audio.mp3" type="audio/mp3" controls></audio>
            </div>
            <div class="player">
                <div class="imgbox">
                    <img src="Figurat/Food.png" alt="Podcast Ushqimi i Shëndetshëm">
                </div>
                <div class="content">
                    <h3>Zgjedhje Ushqimore për një Jetë të Shëndetshme</h3>
                    <p>Mësoni se cilat janë zakonet më të mira ushqimore për një trup të balancuar dhe energjik.</p>
                </div>
                <audio src="audio2.mp3" type="audio/mp3" controls></audio>
            </div>
        </div>
    </section>

    <section class="footer">

        <div class="icons">
          <p>&copy; 2025 Healify | Të gjitha të drejtat e rezervuara</p>

      </div>
    </section>

    <script>
        const cards = document.querySelectorAll('.card');

        function showCardsOnScroll(){
            const triggerBottom = window.innerHeight * 0.8;

        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            if(cardTop < triggerBottom){
                card.classList.add('show');
            }else {
                card.classList.remove('show');
            }
        });
    }

    window.addEventListener('scroll', showCardsOnScroll);
    </script>
</body>
</html>