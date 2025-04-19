<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherbimet e Spitalit</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

      
        .spital-title {
    font-size: 20px; 
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
        nav img{
            width: 150px;

        }
        .header{
            min-height: 100vh;
            width: 100%;
            background: url('Figurat/shbg.png') no-repeat center center/cover; 
            background-position: center;
            background-size: cover;
            position: relative;
            
        }


        /* FOTO Section CSS ndodh qe ndrrohet fotoja */
        .foto {
           font-size:62px;
            width: 90%;
            color:#fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            transition: transform 0.4s ease, font-size 0.4s ease; /* Smooth animacion për të dyja gjendjet */
              cursor: pointer;    
        }

        .foto:hover h1 {
    transform: scale(1.1); /* Rritet pak */
    font-size: 70px; /* Rritje e butë në madhësi */
    transition: transform 0.4s ease-in-out, font-size 0.4s ease-in-out; /* Animacion smooth */
}

.foto h1:active {
    transform: scale(0.95); /* Zvogëlohet pak kur klikohet */
    font-size: 60px; /* Madhësia zvogëlohet pak për efekt */
    transition: transform 0.4s ease-out, font-size 0.4s ease-out; 
   
}

       .box-imadh{
        background-color: #1c1c1c;
        min-height: 100vh;
        width: 100%;
     
}
       .service-wrapper{
        padding: 5% 8%;

       }

       .service{
        display: flex;
        flex-direction: column;
        align-items: center;
       }

       .box-imadh h1{
        color:#fff;
        font-size: 3rem;
       }

       .box-imadh p{
       
        text-align: center;
       }

       .boxat{
        display:grid;
        grid-template-columns: repeat(4,1fr);
        gap: 30px;
        margin-top: 40px;
       }

       .box{
        height:350px;
        width: 350px;
        background-color: rgba(255, 255, 255,0.05);
        padding: 3% 8%;
        border-radius: 8px;
        transition: 0.6s;
       }

       .box i {
        color:#0449d49c;
        margin-top: 40px;
        margin-bottom: 15px;
        font-size: 2.5rem;
       }

       .box h2{
        color:#fff;
        font-size: 20px;
        margin: 10px 0;
        font-weight: 500;
       }

       .box p{
        text-align: left;
        width: 100%;
        margin: 20px 0;
}
       .box:hover{
          background: linear-gradient(80deg, #0449d49c, #52abd8);
          transform: translateY(-8px);
       }

       .box:hover i{
        color:#fff;
       }

       .boxat a{
        text-decoration: none;
        color:inherit;
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
        .icons .fa{
            color:#0449d49c;
            margin: 0 13px;
            cursor: pointer;
            padding: 18px 0;
        }
        p{
            color: rgba(255, 255, 255,0.6);
            font-size: 14px;
            font-weight: 300;
            line-height: 22px;
            padding: 10px;
        }

      </style>
      
   </head>
<body>
    <!-- Navbar -->
    <section class="header">
        <nav>
            <div class="spital-title"> Healify </div>
           <!--vendoset ni logo ktu mavone-->
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
        <a href="shkronjat.html" style="text-decoration: none; color: inherit;">
            <section class="foto" id="home">
               
                <h1>Healify services</h1>
                
            </section>
                </a>
        </section>

        <!-- section i sherbimeve -->

   <section>
    <div class="box-imadh">
        <div class="service-wrapper">
            <div class="service">
               <h1>Disa nga sherbimet tona</h1>  
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
               <div class="boxat">
                <a href="stafi.html"  target="_blank">
                <div class="box"> 
                    <i class="fa fa-user-md"></i>
                    <h2>Emergjenca</h2>
                    <p>Ofrojmë kujdes emergjent 24/7 me staf te specializuar </p>
                </div>
            </a>
            <a href="about.html"   target="_blank">
                <div class="box">
                    <i class="fa fa-h-square"></i>
                    <h2>Me shume rreth nesh</h2>
                    <p>Gjithqka qe doni te dini rreth nesh mund te gjeni duke klikuar ketu</p>
                </div>
            </a>
            <a href="shkronjat.html"  target="_blank">
                <div class="box">
                    <i class="fa fa-stethoscope"></i>
                    <h2>Diagnostikimi</h2>
                    <p>Diagnostikim i shpejtë dhe i saktë nga shtepia</p> 
                </div>
            </a>
            <a href="contactss.html"  target="_blank">
                <div class="box">
                    <i class="fa fa-edit"></i>
                    <h2>Kontakti</h2>
                    <p>Per meshume mund te caktoni terminin tuaj duke klikuar ketu</p>
                </div>
            </a>
                 </div>
            </div>
        </div>
    </div>
   </section>
    
   <section>

   </section>


      <!--section i fundit i footer i njejt si ne home -->
    <section class="footer">

          <div class="icons">
            <p>&copy; 2024 Healify | Të gjitha të drejtat e rezervuara</p>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>

        </div>

</section>

</body>
</html>