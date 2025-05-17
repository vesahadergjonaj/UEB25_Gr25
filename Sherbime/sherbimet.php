<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherbimet e Spitalit</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
            body{
            margin: 0;
            background-color:  #000;
            color: #eee;
           font-family: 'Poppins', sans-serif;
           overflow-x: hidden; /* mos me mujt me bo scroll horizontalisht */
           padding-bottom: 50px;
        }

      .header{
        height: 50px;
        position:relative;
        z-index: 100;  
        position: relative;
        top: -17px;
 }

         .spital-title {
    font-size: 25px; 
    font-weight: 600; 
    color: #f4f4f4; 
    margin-left: 20px; 
    text-align: left;
     
    }

       /* Navbar eshte i njejti si ne home */
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
       
       
        .container{
           height: 100vh;
           margin-top: -50px;
           position: relative;

        }
        .container .list .item{
            position: absolute;
            inset: 0 0 0 0;
            overflow: hidden;
            opacity: 0;
            transition: .5s;
        }
        .container .list .item img{
            width:100%;
            height:100%;
            object-fit: cover;
        }

        .container .list .item::after{  
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            background-image: linear-gradient(
                to top, #000 40%, transparent
            );
        }

        .container .list .item .content{
            position: absolute;
            top: 20%;
            width: 500px;
            max-width:80%;
            left: 10%;
            z-index: 1;
        }

        .container .list .item .content p:nth-child(1){
           text-transform: uppercase;
           letter-spacing: 10px;
        }
        .container .list .item .content h2{
            font-size: 90px;
            margin:0;
              
        }

        .container .list .item.active{
            opacity: 1;
            z-index:10;
        }

        @keyframes showContent {
            to{
                transform: translateY(0);
                filter: blur(0);
                opacity: 1;
            }
        }

        .container .list .item.active p:nth-child(1),
        .container .list .item.active h2,
        .container .list .item.active a,
        .container .list .item.active p:nth-child(3){
            transform: translateY(30px);
            filter:blur(20px);
            opacity: 0;
            animation: showContent .5s .7s ease-in-out 1 forwards ;
        }

        .container .list .item.active h2{
            animation-delay: 1s;
        }
        .container .list .item.active p:nth-child(3){
            animation-duration:1.3s;
        }

        /* arrows */
        .arrows{
            position: absolute;
            top:30%;
            right: 50px;
           z-index: 100; 
           
        }
        
        .arrows button{
            background-color: #eee5;
            border: none;
            font-family: monospace;
            width: 40px;
            height: 40px;
            border-radius:5px;
            font-size: x-large;
            color: #eee;
            cursor: pointer;
           
        }

        .arrows button:hover{
            background-color: #eee;
            color: black;
        }

        .kontenti{
            position:absolute;
            left: 20%; /**/
          bottom:50px;
            z-index:11;
            display:flex;
            gap: 10px;
            width:100%;
            height: 250px;
            padding: 0 50px;
            box-sizing: border-box;
            overflow: auto;
            justify-content: center;
            cursor: pointer;
        }
        .kontenti::-webkit-scrollbar{ /*per me menaxhu scrollbar*/
           width: 0;
        }
        .kontenti .item{
            width: 150px;
            height:220px;
            filter: brightness(.5);
            transition: .5s;
            flex-shrink: 0; /* qe mu dok mire items ne telefon */
        }

        .kontenti .item img{
            width: 100%;
            object-position: right;
            height: 100%;
            object-fit: cover; /*per me rregullu foton */
            border-radius: 10px;
            background-origin: content-box;
        }
         .kontenti .item.active{
            filter: brightness(1.5);
         }

         .kontenti .item .content{
            position: absolute;
            inset: auto 10px 10px 10px;
         }
         .cta-button {
            text-decoration: none;
            display: inline-block;
            margin-top: 10px; 
            padding: 10px 20px;
           background-color: #f44336;
           color: white;
           font-size: 16px;
           font-weight: 600;
           border: none;
           position: fixed;
           border-radius: 5px;
           cursor: pointer;
           transition: background-color 0.5s ease;
    }

     .cta-button:hover {
    background-color: #d17d7d; 
   }

          .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            font-size: 0.9rem;
            background-color: black;
            text-align: center;
            padding: 10px;
            
            color:#b8b5b5;
        }

        .footer p {
            margin: 0;
        }



      </style>
   </head>
<body>
    <!-- Navbar/Header -->
    <header class="header">
        <nav>
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
    </header>

        <!-- sherbimet -->

    <div class="container">
        <div class="list">
            <div class="item active">
                <img src="../Figurat/shbg.png">
               <div class="content">
                <p>healify</p>
                <h2>Sherbimet Tona</h2>
                <p>
                    Spitali ynë ofron shërbime të plota shëndetësore, përfshirë diagnostikim, 
                    trajtime mjekësore dhe kirurgjike, kujdes emergjent 24/7 dhe rehabilitim. 
                    Me ekip të kualifikuar dhe teknologji të avancuar, ne sigurojmë kujdes cilësor për pacientët tanë.
                </p>
               </div>
            </div>
         <div class="item">
                <img src="../Figurat/sh-diagnostifikimi.png">
                <div class="content">
                 <p>healify</p>
                 <h2>Diagnoza ime</h2>
                 <p>
                    "Diagnoza ime" ofron një mundësi të thjeshtë për të kërkuar dhe zbuluar sëmundje dhe gjendje shëndetësore. 
                     Gjej informacione të shpejta për diagnoza dhe trajtimet.
                     <br>
                     Për të gjetur diagnozën tënde, klikoni në butonin poshtë.
                 </p>
                 <a href="shkronjat.php" class="cta-button" target="_blank">Diagnostifikohu online</a>
                </div>
            </div>
        <div class="item">
                <img src="../Figurat/sh-stafi.png">
                <div class="content">
                 <p>healify</p>
                 <h2>Emergjenca/Ekipi</h2>
                 <p>
                    Faqja “Doktorët e Spitalit” ofron informacion të detajuar për specialistët më të njohur dhe të besueshëm në fushën e mjekësisë. 
                     Në fund të faqes mund të gjeni edhe numrat emergjentë për çdo nevojë të papritur.
                     <br> 
                    Për të gjetur doktorin tuaj, klikoni në butonin më poshtë.
                 </p>
                 <a href="stafi.php" class="cta-button" target="_blank">Ekipi/Emergjenca</a>
                </div>
               
             </div>
             <div class="item">
                <img src="../Figurat/sh-contact.png">
                <div class="content">
                 <p>healify</p>
                 <h2>Kontakti</h2>
                 <p>
                    Faqja jonë ofron mundësinë për të caktuar termine për konsultime mjekësore dhe për t'u lidhur me specialistët tanë. 
                    Thjesht plotësoni formularin dhe do të kontaktoheni sa më shpejt për të konfirmuar orarin tuaj. Për çdo pyetje ose për të marrë informacion të mëtejshëm.
                    <br> 
                    Mund të na kontaktoni nëpërmjet butonit më poshtë.
                 </p>
                 <a href="Contacts/contactss.php" class="cta-button" target="_blank">Kontakti</a>
                </div>
               
             </div>
             <div class="item">
                <img src="../Figurat/sh-aboutus.png">
                <div class="content">
                 <p>healify</p>
                 <h2>Rreth nesh</h2>
                 <p>
                    Spitali ynë ofron shërbime shëndetësore të shkëlqyera, duke përdorur teknologji moderne dhe staf profesional për të siguruar kujdes të personalizuar për pacientët tanë. 
                    Jemi të përkushtuar për shëndetin dhe mirëqenien tuaj.
                    <br>
                    Për më shumë informacion, klikoni në butonin më poshtë.
                 </p>
                 <a href="about.php" class="cta-button" target="_blank">Rreth nesh</a>
                </div>
               
             </div>
        </div>
        <!--arrosw-->
     <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
     </div>
    </div>

    <!--kontenti-->
     <div class="kontenti">
       <div class="item active">   
         <img src="../Figurat/shbg.png">
         <div class="content">
            Sherbimet
         </div>
       </div>
       <div class="item">
        <img src="../Figurat/sh-diagnostifikimi.png">
        <div class="content">
           Diagnza ime
        </div>
       </div>
       <div class="item">
        <img src="../Figurat/sh-stafi.png">
        <div class="content">
           Emergjenca
        </div>
       </div>
       <div class="item">
        <img src="../Figurat/sh-contact.png">
        <div class="content">
           Kontakti
        </div>
       </div>
       <div class="item">
        <img src="../Figurat/sh-aboutus.png">
        <div class="content">
           Rreth nesh
        </div>
       </div>
     </div>


     <footer class="footer">
        <p>&copy; <span id="year"></span> Healify | Të gjitha të drejtat e rezervuara</p>
    </footer>
    
    
   <script>
    //footer perdorimi i date
    const yearElement = document.getElementById("year");
        const currentYear = new Date().getFullYear();
        yearElement.textContent = currentYear;


    let items = document.querySelectorAll('.container .list .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    let kontenti = document.querySelectorAll('.kontenti .item');

    // config param
    let countItem = items.length;
    let itemActive =0;
    // event next click
    next.onclick = function(){
        itemActive = itemActive + 1;
        if(itemActive >= countItem){
             itemActive = 0;
    }
    showSlider();
}
     // event prev click
     prev.onclick = function(){
        itemActive = itemActive - 1;
        if(itemActive < 0){
            itemActive = countItem - 1;
        }
        showSlider();
     }

     // auto run slider
     let refreshInterval = setInterval(() =>{
        next.click();
     },10000) // pas 10 sekonda me u kliku automatikisht tjetra slide

    function showSlider(){
        //remove item active old 
        let itemActiveOld = document.querySelector('.container .list .item.active');
        let kontentiActiveOld = document.querySelector('.kontenti .item.active');
        itemActiveOld.classList.remove('active');
        kontentiActiveOld.classList.remove('active');

        //active new item 
        items[itemActive].classList.add('active');
        kontenti[itemActive].classList.add('active');

        //clear auto time run slider 
        clearInterval(refreshInterval);
        refreshInterval = setInterval(() =>{
        next.click();
     }, 10000)
    }

    //me kliku ne cilen do prej kontentit
    kontenti.forEach((thumbnail, index) =>{
        thumbnail.addEventListener('click', () => {
            itemActive= index;
            showSlider();
        })
    })

 </script>
</body>
</html>