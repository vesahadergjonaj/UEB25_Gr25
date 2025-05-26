<?php
require_once 'database.php';
require_once 'krijoStafi.php'; // Ku krijohen objektet $doctor1, $doctor2, etj.

$doctors = [$doctor1, $doctor2, $doctor3, $doctor4];

foreach ($doctors as $doctor) {
    if ($doctor !== null) {
        $name = $doctor->getName();
        $title = $doctor->getTitle();
        $description = $doctor->getDescription();
        $contact = $doctor->getContact();
        $specialization = $doctor->getSpecialization();

        $sql = "INSERT INTO doctors (name, title, description, contact, specialization) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $name, $title, $description, $contact, $specialization);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($con);
?>
