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
         background: url('../Figurat/sh-diagnostifikimi.png') no-repeat center center/cover; 
            color: white;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: flex-start;
           height:100vh;
           margin:0;
            padding: 0 20px;
            overflow: hidden;
            }


            .google {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 50px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
        }
        .search-bar:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.6);
            transform: scale(1.02);
        }
        .search-bar input {
            flex: 1;
            border: none;
            background: transparent;
            color: white;
            font-size: 18px;
            padding: 10px;
            outline: none;
        }

        .search-bar button {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .search-bar button:hover {
            background: linear-gradient(135deg, #5d7ae5, #946fd6);
            transform: scale(1.1);
        }


        .kutia_shkronjave {
            display: grid;
            grid-template-columns: repeat(10, 50px);
            grid-gap: 15px;
            justify-content: center;
            width: 100%;  
            margin-top: 30px;
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
        .letter:hover { 
        background-color: rgba(128, 135, 137, 0.8); 
        transform: scale(1.1); 
    }

        h1{
            font-size: 32px;
           margin-top:60px;
           text-align: center;
           color: #fff;
          font-weight: 500;
        }
        
 
    </style>
</head>
<body>
    
    <h1>Kërko Sëmundje & Gjendje Shëndetësore sipas shkronjës së parë</h1>
    <div class="kutia_shkronjave">
      
        <a href="Shkronjat/ZA.php" class="letter">A</a>
        <a href="Shkronjat/ZB.php" class="letter">B</a>
        <a href="Shkronjat/ZC.php" class="letter">C</a>
        <a href="Shkronjat/ZD.php" class="letter">D</a>
        <a href="Shkronjat/ZE.php" class="letter">E</a>
        <a href="Shkronjat/ZF.php" class="letter">F</a>
        <a href="Shkronjat/ZG.php" class="letter">G</a>
        <a href="Shkronjat/ZH.php" class="letter">H</a>
        <a href="Shkronjat/ZI.php" class="letter">I</a>
        <a href="Shkronjat/ZJ.php" class="letter">J</a>
        <!--vetem 10 shkronjat e para apo shkronjat lart jane te shfrytezueshmee-->
        <a href="Shkronjat/ZK.php" class="letter">K</a>
        <a href="Shkronjat/ZL.php" class="letter">L</a>
        <a href="Shkronjat/ZM.php" class="letter">M</a>
        <a href="Shkronjat/ZN.php" class="letter">N</a>
        <a href="Shkronjat/ZO.php" class="letter">O</a>
        <a href="Shkronjat/ZP.php" class="letter">P</a>
        <a href="Shkronjat/ZQ.php" class="letter">Q</a>
        <a href="Shkronjat/ZR.php" class="letter">R</a>
        <a href="Shkronjat/ZS.php" class="letter">S</a>
        <a href="Shkronjat/ZT.php" class="letter">T</a>
        <a href="Shkronjat/ZU.php" class="letter">U</a>
        <a href="Shkronjat/ZV.php" class="letter">V</a>
        <a href="Shkronjat/ZW.php" class="letter">V</a>
        <a href="Shkronjat/ZX.php" class="letter">X</a>
        <a href="Shkronjat/ZY.php" class="letter">Y</a>
        <a href="Shkronjat/ZZ.php" class="letter">Z</a>
       </div>


   <h1>Kërko Sëmundje & Gjendje Shëndetësore</h1>
    <div class="google">
        <form id="searchForm" action="https://www.google.com/search" method="get" target="_blank" class="search-bar">
            <input id="searchInput" type="text" name="q" placeholder="Kërko sëmundje..." required>
            <button type="submit">Kërko</button>
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
