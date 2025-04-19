<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnoza me shkronje</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif;
         background: url('Figurat/shbg.png') no-repeat center center/cover; 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: flex-start;
           height:100vh;
           margin:0;
            padding: 0 20px;
            }


        .google { 
            display: flex;
             justify-content: center;
            align-items: center;
             width: 100%;
             margin-top: 30px;
             
            
        }
        .kutia_shkronjave {
            display:grid;
            grid-template-columns: repeat(10, 50px); /* 10 kolona me gjerësi 50px */
            grid-gap: 15px; 
            justify-content: center;
            width: 100%;  
            margin-top: 40px;
        }
        .letter { 
            display: block; 
            width: 50px; 
            height: 50px; 
            line-height: 50px; 
            border: 2px solid white; 
            border-radius: 50%; 
            font-size: 24px; 
            color: white; 
           text-decoration: none; 
            text-align:center;
            transition:background-color 0.3s ease, tranform 0.3s ease;
        }
        .letter:hover { background-color: rgba(128, 135, 137, 0.8); 
        transform: scale(1.1); }
        
        input[type="text"] {
            width: 500px;
             height: 40px; 
             padding:15px;
            border: 2px solid #ccc; 
            border-radius: 25px; 
            font-size: 18px;
            margin-top:20px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #4A90E2;
            outline: none;
        }

        h1{
            font-size: 32px;
           margin-top:30px;
           text-align: center;
           color: #fff;
           font-weight: 500;
        }
    
    </style>
</head>
<body>
    
    <h1>Find diseases & conditions by first letter</h1>
    <div class="kutia_shkronjave">
      
        <a href="Shkronjat/ZA.html" class="letter">A</a>
        <a href="Shkronjat/ZB.html" class="letter">B</a>
        <a href="Shkronjat/ZC.html" class="letter">C</a>
        <a href="Shkronjat/ZD.html" class="letter">D</a>
        <a href="Shkronjat/ZE.html" class="letter">E</a>
        <a href="Shkronjat/ZF.html" class="letter">F</a>
        <a href="Shkronjat/ZG.html" class="letter">G</a>
        <a href="Shkronjat/ZH.html" class="letter">H</a>
        <a href="Shkronjat/ZI.html" class="letter">I</a>
        <a href="Shkronjat/ZJ.html" class="letter">J</a>
        <a href="Shkronjat/ZK.html" class="letter">K</a>
        <a href="Shkronjat/ZL.html" class="letter">L</a>
        <a href="Shkronjat/ZM.html" class="letter">M</a>
        <a href="Shkronjat/ZN.html" class="letter">N</a>
        <a href="Shkronjat/ZO.html" class="letter">O</a>
        <a href="Shkronjat/ZP.html" class="letter">P</a>
        <a href="Shkronjat/ZQ.html" class="letter">Q</a>
        <a href="Shkronjat/ZR.html" class="letter">R</a>
        <a href="Shkronjat/ZS.html" class="letter">S</a>
        <a href="Shkronjat/ZT.html" class="letter">T</a>
        <a href="Shkronjat/ZU.html" class="letter">U</a>
        <a href="Shkronjat/ZV.html" class="letter">V</a>
        <a href="Shkronjat/ZW.html" class="letter">V</a>
        <a href="Shkronjat/ZX.html" class="letter">X</a>
        <a href="Shkronjat/ZY.html" class="letter">Y</a>
        <a href="Shkronjat/ZZ.html" class="letter">Z</a>
      
    
    </div>
    <h1>Search diseases & conditions</h1>
    <div class="google">
        <form id="searchForm" action="https://www.google.com/search" method="get" target="_blank">
            <input id="searchInput" type="text" name="q" placeholder="Search for a disease" required>
        </form>
    </div>

    <!--pjesa e javascript -->
    <script> //lista me disa semundje
        const diseases = [
            "diabeti",
            "kanceri",
            "hipertensioni",
            "astma",
            "semundjet e zemrës",
            "covid-19",
            "obeziteti",
            "artriti",
            "alzheimerit",
            "iktusi",
            "gripi",
            "tuberkulozi",
            "hiv/aids",
            "depresioni",
            "ankthi",
            "migrena",
            "epilepsia",
            "semundja e parkinsonit",
            "semundja celiake",
            "semundja e crohn",
            "sindroma e zorrës së irrituar",
            "lupusi",
            "psoriaza",
            "ekzema",
            "osteoporoza",
            "endometrioza",
            "pcos",
            "refluksi gastroezofageal",
            "semundja e veshkave",
            "skleroza multiple",
            "sindroma e lodhjes kronike",
            "fibromialgjia",
            "çrregullimi bipolar",
            "skizofrenia",
            "spektri i autizmit",
            "adhd",
            "pneumonia",
            "bronkiti",
            "hepatiti",
            "guret ne temth",
            "pankreatiti",
            "gjendrra e tiroide",
            "anemia",
            "leuklemia",
            "melanoma",
            "kanceri i prostatës",
            "kanceri i gjirit",
            "kanceri i zorres se trashe",
            "limfoma",
            "demenca"
        ];
    
        document.getElementById('searchForm').addEventListener('submit', function(event) {
    const input = document.getElementById('searchInput').value.trim().toLowerCase(); // Kthehet nshkronja te vogla
    const isValid = diseases.some(disease => disease.toLowerCase() === input); // Krahasim case insensitive

    if (!isValid) {
        event.preventDefault(); // nuk e len me shku ne google
        alert('Ju lutem kërkoni një sëmundje të vlefshme.');
    }
});
    </script>
</body>
</html>
