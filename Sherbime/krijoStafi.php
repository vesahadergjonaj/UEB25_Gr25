<?php
require_once 'database.php';

$sql = "CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    contact VARCHAR(20) NOT NULL,
    specialization VARCHAR(100) NOT NULL,
    image_path VARCHAR(255)
)";

if (mysqli_query($con, $sql)) {
    echo "Tabela 'doctors' u krijua me sukses!";
} else {
    echo "Gabim: " . mysqli_error($con);
}

mysqli_close($con);
?>
