<?php
require_once 'database.php';
require_once 'stafi.php'; // KU KRIJON $doctor1, $doctor2, etj.

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

        if (mysqli_stmt_execute($stmt)) {
            echo "Doktori $name u shtua me sukses.<br>";
        } else {
            echo "Gabim me doktorin $name: " . mysqli_error($con) . "<br>";
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($con);
?>
