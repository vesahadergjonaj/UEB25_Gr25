<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Healify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
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
/* Pjesa ekzistuese për navbar-in është e paprekur */
body {
    background-color: #1c1c1c;
    color: #d5d2d2;
    line-height: 1.6;
    padding: 20px;
}

.container {
    display: flex;
    gap: 20px;
    margin-top: 80px; /* Shto hapësirë për shkak të navbar-it */
}

/* Stili i seksionit kryesor të informacionit */
.info-kryesore {
    flex: 3;
    margin-left: 80px;
}

.info-kryesore img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgb(27, 65, 213);
    margin-bottom: 20px;
}

.info-kryesore h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #155be7; 
}

.info-kryesore pre {
    background-color: rgba(255, 255, 255, 0.05);
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #155be7;
    overflow-x: auto;
}

/* Sidebar */
.sidebar {
    flex: 1;
    background-color: rgba(40, 40, 40, 0.8);
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #4a4a4a;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.sidebar h2 {
    margin-bottom: 15px;
    font-size: 1.5em;
    color: #155be7; /* Ngjyra e kuqe për titullin e sidebar-it */
}

.sidebar ol {
    list-style: decimal;
    padding-left: 20px;
}

.sidebar ol li {
    margin-bottom: 10px;
}

.sidebar ol li a {
    text-decoration: none;
    color: #d5d2d2;
    transition: color 0.3s ease;
}

.sidebar ol li a:hover {
    color: #155be7;
    text-decoration: underline;
}

/* Për titullin dhe paragrafët */
h1, h2, h3 {
    font-weight: 600;
}

p {
    margin-bottom: 20px;
    font-size: 1.1em;
}

/* Stili për paragrafët e theksuar */
pre b {
    color: #155be7;
    font-size: 1.1em;
}
.spital-title {
            font-size: 25px; 
            font-weight: 600; 
            color: white; 
            margin-left: 20px; 
            text-align: left;
        }

        /*Sliders */
        .slider{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            
        }
.cards{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;  
}
.card-list .card-item{
    list-style: none;
}
.card-list .card-item .card-link{
    user-select: none;
    display: block;
    background: #4a4a4a;
    padding: 18px;
    border-radius: 12px;
    text-decoration: none;
    border: 2px solid transparent;
    box-shadow: 0 10px 10px rgba(0,0,0,0.05);
    transition: 0.2s ease;
}
/* krejt pershkak tqisaj smu bojkeeeeee */
.card-wrapper{
    max-width: 1100px;
    margin: 0 60px 35px;
    padding: 20px 10px;
    overflow: hidden;
}
.card-list .card-item .card-link:hover{
     border-color: #155be7;
}
.card-list .card-link .card-image{
    width: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
    border-radius: 10px;
}
.card-list .card-link .badge{
    color: #155be7;
    padding: 8px 16px;
    font-size: 0.95rem;
    font-weight: 500;
    margin: 16px 0 18px;
    background: white;
    width: fit-content;
    border-radius: 50px;
}
.card-list .card-link .card-title{
    font-size: 1.19rem;
    color: #000;
    font-weight: 600;
}
.card-list .card-link .card-button{
    height: 35px;
    width: 35px;
    color:#155be7;
    border-radius: 50px;
    margin: 30px 0 5px;
    background: none;
    cursor: pointer;
    border: 2px solid #155be7;
    transform: rotate(-45deg);  
}
.card-list .card-link:hover .card-button{
    color: white;
    background: #155be7; 
}
        .card-item img {
            width: 100%;
            border-radius: 10px;
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
</style>

</head>
<body>
    <section class="header">
        <nav>
            <div class="spital-title">Healify</div>
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

        <div class="container">
        <section class="info-kryesore">
            <h1>Why Regular Medical Checkups Are Essential for Your Health</h1>
            <img src="../../Figurat/blog1.png" alt="Medical checkup">
            <pre>                In today’s busy world, it’s easy to put off medical checkups, especially when you feel healthy. However, regular visits to 
                your doctor are one of the best ways to prevent illness and maintaingood health. By identifying potential health risks early,
                checkups can make a lasting impact on your overall well being.
                
                <b><u>Catch Health Issues Early</u></b>
                Many conditions, like high blood pressure or diabetes, don’t show symptoms in their early stages. Regular health screenings
                help detect these issues before they escalate, making them easier to manage or treat. Early detection is particularly important 
                for conditions that run in your family, allowing you to take preventative measures sooner rather than later.
                                
                <b><u>Get Personalised Health Advice</u></b>
                Medical checkups provide an opportunity to discuss your health goals and lifestyle with your doctor.By reviewing your 
                medical history, risk factors, and any ongoing symptoms, they can offer personalised advice to help you live a healthier life.
                                
                <b><u>Monitor Your Progress</u></b>
                If you’re working on improving your health, whether through weight loss, managing a chronic condition, or adopting new habits, 
                regular checkups allow you to track your progress. These visits can also help your doctor adjust your care plan as needed.
                                
                <b><u>Build a Trusted Relationship with Your Doctor</u></b>
                A strong doctor patient relationship is invaluable. Regular appointments help you feel more comfortable discussing your health 
                concerns and ensure your doctor understands your unique needs.
                                
                <b><u>Protect Your Long Term Well Being</u></b>
                Preventative care isn’t just about avoiding illness; it’s about improving your quality of life. Checkups allow you to stay proactive,
                ensuring that you enjoy a healthier future for years to come.
                                
                <b><u>Take Control of Your Health</u></b>
                Making time for regular medical checkups is one of the simplest yet most effective ways to stay healthy. With preventative care, 
                you can catch potential problems early and feel confident in your health choices.
            </pre>
        </section>

        <aside class="sidebar">
            <!-- nested list -->
            <ul>
                <li><b>Why Regular Medical Checkups Are Essential for Your Health</b>
                    <ol>
                        <li>Catch Health Issues Early</li>
                        <li>Get Personalised Health Advice</li>
                        <li>Monitor Your Progress</li>
                        <li>Build a Trusted Relationship with Your Doctor</li>
                        <li>Protect Your Long Term Well Being</li>
                        <li>Take Control of Your Health</li>
                    </ol>
                </li>
            </ul>
            <br>
            <h2>Postime tjera</h2>
            <ol>
                <li><a href="blog1.php">Why Regular Medical Checkups Are Essential for Your Health</a></li>
                <li><a href="blog2.php">How to Manage Chronic Conditions with Lifestyle Changes</a></li>
                <li><a href="blog3.php">Mindfulness Tips for a Calmer, Balanced Life</a></li>
                <li><a href="blog4.php">Effective Prescription Management: Tips for Staying on Track</a></li>
                <li><a href="blog5.php">Chronic Condition Management: How to Take Control of Your Health</a></li>
                <li><a href="blog6.php">Disease Prevention – Small Steps, Big Impact</a></li>
            </ol>
        </aside>
    </div>

<section class="slider"> 
    <div class="cards swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <a href="blog2.php" class="card-link">
                        <img src="../../Figurat/blog2.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">How to Manage Chronic Conditions with Lifestyle Changes</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog3.php" class="card-link">
                        <img src="../../Figurat/blog3.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Mindfulness Tips for a Calmer, Balanced Life</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog4.php" class="card-link">
                        <img src="../../Figurat/blog4.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Effective Prescription Management: Tips for Staying on Track</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog5.php" class="card-link">
                        <img src="../../Figurat/blog5.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Chronic Condition Management: How to Take Control of Your Health</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog6.php" class="card-link">
                        <img src="../../Figurat/blog6.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Disease Prevention – Small Steps, Big Impact</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<section class="footer">

    <div class="icons">
      <p>&copy; 2025 Healify | Të gjitha të drejtat e rezervuara</p>

  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="Blog/blog.js"></script>

</body>
</html>