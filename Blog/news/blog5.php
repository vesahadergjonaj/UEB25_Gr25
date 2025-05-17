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
                    <li><a href="home.php">BALLINA</a></li>
                    <li><a href="about.php">RRETH NESH</a></li>
                    <li><a href="sherbimet.php">SHËRBIMET</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contactss.php">KONTAKTI</a></li>
                    <li><a href="loginii.php">KYÇU</a></li>
                </ul>
            </div>
        </nav>
    </section>

        <div class="container">
        <section class="info-kryesore">
            <h1>Chronic Condition Management: How to Take Control of Your Health</h1>
            <img src="Figurat/blog5.png" alt="Medical checkup">
            <pre>                Managing chronic conditions requires a holistic approach to healthcare, focusing on long term 
                well being and proactive care. We believe in empowering our patients with the knowledge and tools needed to take 
                control of their health. In this blog, we’ll explore strategies for managing chronic conditions, allowing you to 
                live a healthier and happier life.
                
                <b><u>Understand Your Condition</u></b>
                The first step to managing a chronic condition is understanding it. Whether it’s diabetes, hypertension, or asthma, 
                knowing how your condition affects your body and what triggers symptoms is very important. Regular 
                consultations with your healthcare provider help to identify patterns, assess treatment effectiveness, and adjust your 
                care plan as needed. Our doctors work closely with patients to provide tailored insights and personalised treatment plans, 
                ensuring each individual receives the care they need.
                
                <b><u>Maintain Regular Check Ups</u></b>
                Consistent monitoring is key in managing chronic conditions. Regular check ups and health assessments allow your doctor to track 
                your progress and identify any new concerns before they escalate. Whether it’s monitoring blood pressure, sugar levels, or other 
                health indicators, frequent screenings help in detecting issues early. Our team is dedicated to offering comprehensive chronic 
                care, including regular monitoring and medication reviews, to support your long term health.
                
                <b><u>Adhere to Medication and Treatment Plans</u></b>
                Adhering to prescribed medications and treatment plans is essential for managing chronic conditions effectively. 
                Skipping doses or neglecting treatments can lead to complications, potentially worsening the condition. Make sure to take 
                your medication as directed and consult with your healthcare provider if you experience side effects.
                
                <b><u>Adopt a Healthy Lifestyle</u></b>
                A healthy lifestyle plays a significant role in managing chronic conditions. Focus on a diet rich in fruits, vegetables,
                lean proteins, and whole grains while limiting processed foods and sugar. Physical activity in moderate amounts, can help 
                manage weight, reduce stress, and improve your mood. Our team offers lifestyle counselling, guiding patients towards healthier 
                habits that support their specific health needs.
                
                <b><u>Manage Stress and Mental Health</u></b>
                Living with a chronic condition can be challenging and it often affects mental well being. High stress levels can exacerbate 
                symptoms and hinder recovery so stress management is essential. Techniques like mindfulness, deep breathing, and exercise can 
                help manage stress. If anxiety or depression is a concern, seek support from healthcare professionals. At Take Care Clinic, we 
                take a holistic approach, offering mental and emotional care services, including stress management and lifestyle recommendations, 
                to support patients in maintaining a balanced state of mind.
                
                <b><u>Track and Monitor Symptoms</u></b>
                Keeping track of your symptoms can help you and your doctor understand what works best in managing your condition. Make sure that 
                you are tracking your symptoms, medication effects, and lifestyle changes. By identifying triggers and patterns, you can make informed 
                decisions about your care. Our Doctors encourage patients to actively participate in their health management, and we offer tools and 
                resources to support this proactive approach.
                
                
                <b><u>Educate Yourself About Preventative Measures</u></b>
                Preventing complications is just as important as managing existing conditions. Regular screenings, healthy eating, exercise, and 
                maintaining a consistent medication schedule can help keep your condition under control and prevent acute episodes. We are committed 
                to providing preventative care strategies that minimise risks and support long term health. Our services include health assessments, 
                screenings, and patient education to help you understand and manage your condition effectively.
                
                <b><u>Build a Support Network</u></b>
                Living with a chronic condition can sometimes feel isolating, but you don’t have to manage it alone. Building a support network of family, 
                friends, and healthcare professionals can provide you with encouragement and motivation. Sharing your journey with others who 
                understand your struggles can make a significant difference.
                Managing a chronic condition involves consistent care, lifestyle adjustments, and a proactive approach to health. By staying informed, 
                adhering to treatment plans, and seeking regular support, you can take control of your health and improve your quality of life. 
                Let us guide you on your journey to better health, one step at a time.
                Whether you’re managing a long term condition or looking for support in improving your overall well being, We are here to help. 
                Book your appointment today and take the first step towards a brighter future.
            </pre>
        </section>

        <aside class="sidebar">
            <ul>
                <li><b>Chronic Condition Management: How to Take Control of Your Health</b>
                    <ol>
                        <li>Understand Your Condition</li>
                        <li>Maintain Regular Check Ups</li>
                        <li>Adhere to Medication and Treatment PlansBe Aware of Potential Side Effects</li>
                        <li>Adopt a Healthy Lifestyle</li>
                        <li>Manage Stress and Mental Health</li>
                        <li>Track and Monitor Symptoms</li>
                        <li>Educate Yourself About Preventative Measures</li>
                        <li>Build a Support Network</li>
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
                    <a href="blog1.php" class="card-link">
                        <img src="Figurat/blog1.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Why Regular Medical Checkups Are Essential for Your Health</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog2.php" class="card-link">
                        <img src="Figurat/blog2.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">How to Manage Chronic Conditions with Lifestyle Changes</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog3.php" class="card-link">
                        <img src="Figurat/blog3.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Mindfulness Tips for a Calmer, Balanced Life</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog4.php" class="card-link">
                        <img src="Figurat/blog4.png" alt="Card Image" class="card-images">
                        <p class="badge">Healify</p>
                        <h2 class="card-title" style="color:#d5d2d2">Effective Prescription Management: Tips for Staying on Track</h2>
                        <button class="card-button material-symbols-rounded"> arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="blog6.php" class="card-link">
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