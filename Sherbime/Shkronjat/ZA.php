<?php
// Inicializim i variablave
$kerko = $_GET['kerko'] ?? '';
$kerko = trim(strtolower($kerko));

// Lista e sëmundjeve (e plotësuar)
$GLOBALS['semundjet'] = [
    'A' => ['Atrial fibrillation'],
    'Ab' => [
        'Abdominal aortic aneurysm',
        'Abnormally excessive sweating (Hyperhidrosis)',
        "Bartholin's abscess (Bartholin's cyst)",
        'Absence seizure'
    ],
    'Ac' => [
        'Acanthosis nigricans',
        'Achalasia',
        'Achilles tendinitis',
        'Achilles tendon rupture',
        'Acid reflux (GERD)',
        'Infant reflux',
        'ACL injury',
        'Acne'
    ],
    'Ad' => [
        'Acute cholecystitis',
        'Acute kidney injury',
        'Acute lymphoblastic leukaemia',
        'Acute myeloid leukaemia',
        'Acute pancreatitis',
        "Addison's disease", 'ADHD', 'Adjustment disorder', 'Adnexal torsion'
    ],
    'Af' => [
        'Affective disorder',
        'Afibrinogenemia'
    ],
    'Ag' => [
        'Agranulocytosis',
        'Ageusia',
        'Agoraphobia'
    ],
    'Ai' => [
        'Aicardi syndrome',
        'AIDS'
    ],
    'Al' => [
        'Albinism',
        'Alopecia areata',
        'Alpha-1 antitrypsin deficiency',
        'ALS (Amyotrophic lateral sclerosis)',
        "Alzheimer's disease"
    ],
    'Am' => [
        'Amaurosis fugax',
        'Amblyopia',
        'Amelogenesis imperfecta',
        'Amnesia',
        'Amyloidosis'
    ],
    'An' => [
        'Anaphylaxis',
        'Anemia',
        'Aneurysm',
        'Angina',
        'Angioedema',
        'Angular cheilitis',
        'Ankylosing spondylitis',
        'Anorexia nervosa',
        'Anosmia'
    ],
    'Ap' => [
        'Aplastic anemia',
        'Appendicitis',
        'Apraxia'
    ],
    'Ar' => [
        'Arthritis',
        'Arrhythmia',
        'Arteriovenous malformation'
    ],
    'As' => [
        'Asbestosis',
        'Ascariasis',
        "Asperger's syndrome", 'Aspergillosis', 'Asthma'
    ],
    'At' => [
        "Athlete's foot", 'Atherosclerosis', 'Atopic dermatitis (Eczema)', 'Atresia'
    ],
    'Au' => [
        'Auditory processing disorder',
        'Autism spectrum disorder',
        'Autoimmune hepatitis'
    ],
    'Av' => [
        'Avian influenza (Bird flu)'
    ]
];

$rezultatet = [];
if ($kerko !== '') {
    foreach ($GLOBALS['semundjet'] as $grupi => &$lista) {
        foreach ($lista as $s) {
            if (str_contains(strtolower($s), $kerko)) {
                $rezultatet[] = $s;
            }
        }
    }
    unset($lista); // Largimi i referencës pas përdorimit
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista e Sëmundjeve</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }
        h1, h2 {
            color: #0056b3;
            text-align: center;
        }
        form {
            max-width: 500px;
            margin: 0 auto 30px;
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 70%;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            font-size: 1em;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
            max-width: 600px;
            margin: 0 auto;
        }
        li {
            background: #fff;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Lista e Sëmundjeve</h1>

    <form method="get">
        <input type="text" name="kerko" placeholder="Kërko sëmundje..." value="<?=htmlspecialchars($kerko)?>">
        <button type="submit">Kërko</button>
    </form>

    <?php if ($kerko): ?>
        <h2>Rezultatet për: "<?=htmlspecialchars($kerko)?>"</h2>
        <?php if ($rezultatet): ?>
            <ul>
                <?php foreach ($rezultatet as $r): ?>
                    <li><?=htmlspecialchars($r)?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p style="text-align:center; color:#900;">Asnjë rezultat nuk u gjet.</p>
        <?php endif; ?>
    <?php else: ?>
        <?php foreach ($GLOBALS['semundjet'] as $grupi => $lista): ?>
            <h2><?=htmlspecialchars($grupi)?></h2>
            <ul>
                <?php foreach ($lista as $s): ?>
                    <li><?=htmlspecialchars($s)?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
