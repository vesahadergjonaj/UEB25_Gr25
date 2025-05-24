<?php
session_start(); // DUHET të jetë gjithmonë në fillim

$error = $sukses = "";

// Kategoritë që do t’i shfaqësh në dropdown
$kategorite = [
    "Ushqyerje e shëndetshme",
    "Aktivitet fizik",
    "Shëndet mendor",
    "Parandalim sëmundjesh",
    "Kujdes për fëmijët"
];

// KODI që trajton formën (nëse është dërguar)
if (isset($_POST['dergo'])) {
    $emri = trim($_POST['emri']);
    $email = trim($_POST['email']);
    $kategoria = $_POST['kategoria'] ?? '';
    $pyetja = trim($_POST['pyetja']);
    $ngjyra = $_POST['ngjyra'] ?? '#f0f8ff';

    if ($emri && $email && $kategoria && $pyetja) {
        // Ruaj emrin në SESSION
        $_SESSION['emri'] = $emri;
        // Ruaj kategorinë dhe ngjyrën në COOKIE
        setcookie('kategoria_fundit', $kategoria, time() + 3600*24*30, "/");
        setcookie('ngjyra_keshille', $ngjyra, time() + 3600*24*30, "/");

        // RUAN kërkesën në fajll (files)
        $file = fopen("keshilla_personale.txt", "a");
        if ($file) {
            fwrite($file, "Emri: $emri | Email: $email | Kategoria: $kategoria | Pyetja: $pyetja\n");
            fclose($file);
            $sukses = "Kërkesa për këshillë u dërgua me sukses!";
        } else {
            $error = "Gabim gjatë ruajtjes në fajll!";
        }
    } else {
        $error = "Ju lutem, plotësoni të gjitha fushat!";
    }
}

// Për personalizim/autoplotësim
$emriSession = $_SESSION['emri'] ?? '';
$kategoriaCookie = $_COOKIE['kategoria_fundit'] ?? '';
$ngjyraCookie = $_COOKIE['ngjyra_keshille'] ?? '#f0f8ff';
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Këshilla Personale</title>
</head>
<body>

<div style="max-width:430px;margin:30px auto;padding:22px 15px;border-radius:11px;background:<?=htmlspecialchars($ngjyraCookie)?>">
    <h3 style="text-align:center;color:#1976d2;">Porosit një këshillë të personalizuar nga stafi</h3>
    <?php if ($error) echo "<div style='color:#c00'>$error</div>"; ?>
    <?php if ($sukses) echo "<div style='color:green'>$sukses</div>"; ?>
    <form method="post">
        <label>Emri:</label>
        <input type="text" name="emri" required value="<?=htmlspecialchars($emriSession)?>"><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Kategoria e këshillës:</label>
        <select name="kategoria" required>
            <option value="">Zgjidh...</option>
            <?php foreach ($kategorite as $kat): ?>
                <option <?=($kategoriaCookie==$kat)?'selected':''?>><?=htmlspecialchars($kat)?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Pyetja ose shqetësimi juaj:</label>
        <textarea name="pyetja" required></textarea><br>
        <label>Ngjyra e seksionit:</label>
        <input type="color" name="ngjyra" value="<?=htmlspecialchars($ngjyraCookie)?>"><br><br>
        <button type="submit" name="dergo">Dërgo kërkesën</button>
    </form>
</div>

</body>
</html>
