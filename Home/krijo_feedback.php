<?php
require_once 'db_con.php'; // përdor path-in sipas strukturës tënde

$sql = "CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    emri VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mesazhi TEXT NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabela feedback u krijua me sukses!";
} else {
    echo "Gabim: " . $conn->error;
}
$conn->close();
?>
