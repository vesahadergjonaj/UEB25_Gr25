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
    width: 90%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgb(27, 65, 213);
    margin-bottom: 20px;
    margin-left: 45px;
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
                    <li><a href="home.html">BALLINA</a></li>
                    <li><a href="about.html">RRETH NESH</a></li>
                    <li><a href="sherbimet.html">SHËRBIMET</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contactss.html">KONTAKTI</a></li>
                    <li><a href="loginii.html">KYÇU</a></li>
                </ul>
            </div>
        </nav>
    </section>

        <div class="container">
        <section class="info-kryesore">
            <h1>Mindfulness Tips for a Calmer, Balanced Life</h1>
            <img src="Figurat/blog3.png" alt="Medical checkup">
            <pre >                We believe in the importance of nurturing not just the body, but also the mind. Mindfulness is avaluable tool that can help in maintaining
                emotional and psychological well-being, and today we’d like to share  some tips to incorporate mindfulness into your daily life.

                <b><u>Start Small with Breathing Exercises</u></b>
                Mindfulness doesn’t require complicated techniques or hours of meditation. A simple place to begin is with your breath. Focusing on 
                deep, intentional breathing can instantly ground you and bring you back to the present moment. Try taking fifteen minutes each day 
                to sit quietly, inhale deeply through your nose, hold for a few seconds, and exhale slowly through your mouth. This small exercise 
                can help lower stress levels, improve concentration, and promote a sense of calm.
                
                <b><u>Incorporate Mindfulness into Daily Tasks</u></b>
                Mindfulness isn’t just for meditation; it can be applied to everyday tasks. Whether you’re washing the dishes, taking a walk, or
                even brushing your teeth, try to focus on the sensations and actions involved. Engage your senses, how does the water feel on your
                hands, what sounds do you hear around you, how does the ground feel under your feet? By doing this, you bring yourself fully into 
                the present, which can help reduce feelings of stress and overwhelm.
                
                <b><u>Embrace Guided Meditation</u></b>
                If you’re new to mindfulness, guided meditations can be a great way to start. These sessions, available in various apps or online, 
                provide direction and focus, making it easier to stay present. Guided meditations often include relaxation techniques and visualisation
                exercises, perfect for those struggling to quiet the mind. Over time, regular practice can lead to improved emotional regulation and 
                better stress management, something we often recommend to our patients at Healify Clinic as part of their mental and 
                emotional well-being plan.
                
                <b><u>Let Go of Judgment</u></b>
                A core principle of mindfulness is letting go of judgement, both towards yourself and others. Often, our minds are filled with 
                self-criticism and worry. Mindfulness encourages you to observe your thoughts and feelings without judging them. When a negative 
                thought arises, acknowledge it, but don’t dwell on it. This practice allows you to build emotional resilience, enhancing your overall
                emotional wellness.
                
                <b><u>Create a Mindfulness Routine</u></b>
                Making mindfulness a regular part of your day doesn’t need to be time-consuming. Establish a mindful routine that fits into your lifestyle.
                It could be as simple as taking a few moments each morning to set your intentions for the day or practising a quick meditation before bed. 
                Small, consistent practices add up and can have a significant impact on your overall well-being.
                We understand the connection between mental, emotional, and physical health. By incorporating mindfulness into your daily routine, you’r 
                taking an important step towards maintaining balance in all aspects of your life. Remember, mindfulness is not about perfection; it’s 
                about being present and finding peace in the here and now.
            </pre>
        </section>

        <aside class="sidebar">
            <ul>
                <li><b>Mindfulness Tips for a Calmer, Balanced Life</b>
                    <ol>
                        <li>Start Small with Breathing Exercises</li>
                        <li>Incorporate Mindfulness into Daily Tasks</li>
                        <li>Embrace Guided Meditation</li>
                        <li>Let Go of Judgment</li>
                        <li>Build a Support Network</li>
                        <li>Create a Mindfulness Routine</li>
                    </ol>
                </li>
            </ul>
            <br>
            <h2>Postime tjera</h2>
            <ol>
                <li><a href="blog1.html">Why Regular Medical Checkups Are Essential for Your Health</a></li>
                <li><a href="blog2.html">How to Manage Chronic Conditions with Lifestyle Changes</a></li>
                <li><a href="blog3.html">Mindfulness Tips for a Calmer, Balanced Life</a></li>
                <li><a href="blog4.html">Effective Prescription Management: Tips for Staying on Track</a></li>
                <li><a href="blog5.html">Chronic Condition Management: How to Take Control of Your Health</a></li>
                <li><a href="blog6.html">Disease Prevention – Small Steps, Big Impact</a></li>
            </ol>
        </aside>
    </div>

<section class="slider"> 
    <div class="cards swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <a href="blog1.html" class="card-link">
                        <img src="Figurat/blog1.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Why Regular Medical Checkups Are Essential for Your Health</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog2.html" class="card-link">
                        <img src="Figurat/blog2.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">How to Manage Chronic Conditions with Lifestyle Changes</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog4.html" class="card-link">
                        <img src="Figurat/blog4.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Effective Prescription Management: Tips for Staying on Track</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog5.html" class="card-link">
                        <img src="Figurat/blog5.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Chronic Condition Management: How to Take Control of Your Health</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog6.html" class="card-link">
                        <img src="Figurat/blog6.png" alt="Card Image" class="card-images">
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

<script src="blog.js"></script>

</body>
</html>