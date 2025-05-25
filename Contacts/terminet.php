<?php
require_once 'DBcon.php';  

$sql = "CREATE TABLE IF NOT EXISTS terminet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    emri VARCHAR(100) NOT NULL,
    mbiemri VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    tel VARCHAR(15) NOT NULL,
    date DATE,
    specifikimi TEXT NOT NULL,
    qyteti VARCHAR(100) NOT NULL
)"; 

if (mysqli_query($con, $sql)) {
    echo "Tabela 'terminet' u krijua me sukses!";
} else {
    echo "Gabim: " . mysqli_error($con);
}

mysqli_close($con);
?>
    