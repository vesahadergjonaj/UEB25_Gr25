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
            <h1>Effective Prescription Management: Tips for Staying on Track</h1>
            <img src="Figurat/blog4.png" alt="Medical checkup">
            <pre>                Managing prescriptions effectively is crucial for maintaining good health, especially if you have a chronic 
                condition requiring regular medication. Proper prescription management ensures that you take the right medications at the right time. 
                We believe in a holistic approach to healthcare, helping our patients manage their prescriptions and overall well being. In this blog, 
                we’ll share practical tips on how you can stay on top of your prescription management.
                
                <b><u>Stick to a Medication Schedule</u></b>
                One of the main challenges people face with prescription management is remembering to take their medication. Setting a consistent 
                schedule can make this easier. Try to take your medication at the same time every day, linking it with another daily routine such 
                as brushing your teeth or having a meal. Utilising pillboxes with daily compartments can also help you keep track. Our healthcare team 
                can offer personalised advice on setting up a medication schedule that works best for you.
                
                <b><u>Regularly Review Your Medication List</u></b>
                Over time, your health needs may change, which could require adjustments to your prescriptions. Regularly reviewing your 
                medication list with your doctor ensures that each prescription is still necessary and that there are no adverse interactions 
                between drugs. Medication reviews are particularly important if you are seeing multiple healthcare providers. We offer regular 
                check ups and medication reviews to make sure your prescriptions align with your current health requirements.
                
                <b><u>Be Aware of Potential Side Effects</u></b>
                Understanding possible side effects can help you manage them if they occur. Always read the information leaflet that comes with 
                your medication, and don’t hesitate to reach out to your healthcare provider if you have concerns. Common side effects can often 
                be managed with simple adjustments or lifestyle changes, but it’s important to seek advice rather than stopping a medication abruptly.
                
                <b><u>Organise Your Medications Properly</u></b>
                Keeping your medications organised is an essential part of prescription management. Store them in a safe, dry place away from direct 
                sunlight, and ensure they are out of reach of children. If you’re managing multiple prescriptions, label each container clearly and 
                check the expiration dates regularly. Proper organisation reduces the risk of missed doses or accidental double dosing, supporting 
                better health outcomes.
                
                <b><u>Use Digital Reminders</u></b>
                There are many tools available to help you manage your prescriptions. Smartphone apps can send reminders when it’s time to take your 
                medication or notify you when it’s time to refill a prescription. These apps can also track your consistency over time, helping you 
                stay on track.
            
                <b><u>Never Skip Doses</u></b>
                Skipping doses can reduce the effectiveness of your treatment and may lead to complications, especially if you’re managing chronic 
                conditions such as hypertension or diabetes. If you miss a dose, read the medication leaflet for advice on what to do next, or 
                speak to your doctor for guidance. We encourage our patients to communicate openly about any challenges they face with their 
                prescriptions so we can offer the right support. 
                
                <b><u>Plan Ahead for Refills</u></b>
                Running out of medication can disrupt your treatment and affect your health. To avoid this, plan ahead and set reminders to refill your 
                prescriptions a few days before they run out. Consider using automatic refill services offered by your pharmacy, which can save time 
                and reduce the stress of remembering to order your medication. Our team can assist in coordinating refills and managing prescription 
                transfers if needed.
                
                <b><u>Your Partner in Prescription Management</u></b>
                We have covered how effective prescription management is key to achieving better health, especially for those with chronic conditions. 
                By following these simple yet effective strategies, you can improve your adherence to your medication regimen and minimise the risk of 
                complications. At Healify Clinic, we’re dedicated to providing comprehensive support, from personalised treatment plans to regular
                medication reviews. Our experienced team is here to help you every step of the way, ensuring that your prescription management is 
                as smooth and effective as possible. Managing your prescriptions doesn’t have to be difficult. With the right tools and professional 
                support, you can take control of your health and well being. For more information or to schedule an appointment, visit Healify 
                Clinic today.
            </pre>
        </section>

        <aside class="sidebar">
            <ul>
                <li><b>Effective Prescription Management: Tips for Staying on Track</b>
                    <ol>
                        <li>Stick to a Medication Schedule</li>
                        <li>Regularly Review Your Medication List</li>
                        <li>Be Aware of Potential Side Effects</li>
                        <li>Organise Your Medications Properly</li>
                        <li>Use Digital Reminders</li>
                        <li>Never Skip Doses</li>
                        <li>Plan Ahead for Refills</li>
                        <li>Your Partner in Prescription Management</li>
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
                    <a href="blog3.html" class="card-link">
                        <img src="Figurat/blog3.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Mindfulness Tips for a Calmer, Balanced Life</h2>
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