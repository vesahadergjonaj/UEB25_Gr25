<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Diagnoza me shkronje</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('../Figurat/sh-diagnostifikimi.png') no-repeat center center/cover;
            color: white;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            font-weight: 500;
            font-size: 32px;
            margin-top: 60px;
            text-align: center;
            color: #fff;
        }
        .kutia_shkronjave {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
            gap: 15px;
            max-width: 600px;
            width: 100%;
            margin-top: 30px;
            justify-content: center;
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
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            user-select: none;
        }
        .letter:hover {
            background-color: rgba(128, 135, 137, 0.8);
            transform: scale(1.1);
        }
        .google {
            margin-top: 50px;
            width: 100%;
            max-width: 600px;
            display: flex;
            justify-content: center;
        }
        .search-bar {
            display: flex;
            align-items: center;
            width: 100%;
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
        #result {
            margin-top: 30px;
            max-width: 900px;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 12px;
            padding: 30px;
            font-size: 18px;
            white-space: pre-line;
            color: #ddd;
            min-height: 100px;
            box-shadow: 0 0 10px rgba(255,255,255,0.1);
            overflow-wrap: break-word;
            white-space: pre-wrap;
    overflow-y: auto;
    max-height: none;
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
        <a href="Shkronjat/ZW.php" class="letter">W</a>
        <a href="Shkronjat/ZX.php" class="letter">X</a>
        <a href="Shkronjat/ZY.php" class="letter">Y</a>
        <a href="Shkronjat/ZZ.php" class="letter">Z</a>
    </div>

    <h1>Kërko Sëmundje & Gjendje Shëndetësore</h1>
    <div class="google">
        <form id="searchForm" class="search-bar" autocomplete="off">
            <input id="searchInput" type="text" name="q" placeholder="Kërko sëmundje..." required autocomplete="off" />
            <button type="submit">Kërko</button>
        </form>
    </div>

    <div id="result"></div>

   <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const input = document.getElementById('searchInput').value.trim();
        const resultBox = document.getElementById('result');

        if (!input) {
            resultBox.textContent = "Ju lutem shkruani një emër sëmundjeje për të kërkuar.";
            return;
        }

        resultBox.textContent = "Duke kërkuar informacion...";

        fetch('api.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `prompt=${encodeURIComponent("Më trego për sëmundjen: " + input)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                resultBox.textContent = 'Gabim: ' + (typeof data.error === 'string' ? data.error : JSON.stringify(data.error));
                return;
            }
            const reply = data.choices[0].message.content;
            resultBox.textContent = reply;
        })
        .catch(err => {
            resultBox.textContent = 'Gabim në kërkesë: ' + err.message;
        });
    });
</script>

</body>
</html>
