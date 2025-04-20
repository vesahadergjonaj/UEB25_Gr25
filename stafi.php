<?php

class Doctor {
    private $name;
    private $title;
    private $description;
    private $contact;
    protected $id;

    public function __construct($name, $title, $description, $contact, $id = null) {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->contact = $contact;
        $this->id = $id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getContact() {
        return $this->contact;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    protected function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}


class Specialist extends Doctor {
    private $specialization;
    
    public function __construct($name, $title, $description, $contact, $specialization, $id = null) {
        parent::__construct($name, $title, $description, $contact, $id);
        $this->specialization = $specialization;
    }
    
    public function getSpecialization() {
        return $this->specialization;
    }

    public function setSpecialization($specialization) {
        $this->specialization = $specialization;
    }
}


$doctor1 = new Specialist("John Millard", "Kirurg", "Dr. Millard krijoi Institutin e Modelimit të Trupit Avancuar, i cili edukon mjekët se si të kryejnë në mënyrë të sigurt dhe të suksesshme procedurat më të fundit dhe aktuale kozmetike.", "+123456789", "Kirurg Plastik");
$doctor2 = new Specialist("Rezarta Kapaj", "Kirurge", "Dr. Rezarta Kapaj është një kirurge plastike e njohur, e specializuar në kirurgjinë rindërtuese dhe estetike. Me përvojë të gjerë në procedura si rinoplastika, otoplastika dhe kirurgjia e gjirit.", "+355696126664", "Kirurgi Estetike");
$doctor3 = new Specialist("Mentor Petrela", "Neurokirurg", "Mentor Petrela, MD, Ph.D., Chev LH, PU-PH Fr, doktor, neurokirurg, profesor, dhe anëtar korrespondent i Akademisë së Shkencave dhe Arteve të Kosovës, lindi në Tiranë.", "04 236 26 41", "Neurokirurg");
$doctor4 = new Specialist("Philip Stieg", "Neurolog", "Dr. Philip E. Stieg është një nga doktorët më të mirë në SHBA dhe një neurolog i njohur ndërkombëtarisht, i specializuar në sëmundjet cerebrovaskulare, tumorët e trurit dhe kirurgjinë e bazës së kafkës.", "+1122334455", "Neurologi");

?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Doktorët e Spitalit</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        header {
             color: rgb(12, 29, 98);
            padding: 20px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            background-attachment: fixed;
        }
        header video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .emergency-section {
            background-color:rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .emergency-section h2 {
            text-align: center;
            color:#023f7b;
            margin-bottom:20px;
        }
        .emergency-section ul {
            list-style-type: none;
            padding: 0;
        }
        .emergency-section li {
            font-size: 1.2rem;
            margin: 10px 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .doctor-section {
            display: flex;
            gap: 10px;
            justify-content: space-around;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-70%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .doctor-card {
            background-color: #ffffff;
            border-radius: 8px;
            color: #000000;
            width: 22%;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .doctor-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .doctor-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .doctor-name {
            font-size: 1.5rem;
            color: #023f7b;
        }

        .doctor-title {
            font-size: 1.2rem;
            color: #1e90ff;
        }

        .doctor-contact {
            margin-top: 15px;
        }

        .contact-btn {
            padding: 10px 20px;
            background-color: #023f7b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #4682b4;
        }
        mark {
    background-color: rgb(166, 222, 242); 
    color: #000; 
}
    </style>
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            //match
            let doctorTitles = document.querySelectorAll('.doctor-title');
            let matchedTitles = [];
            
            console.log(doctorTitles);  
            
            doctorTitles.forEach(title => {
                console.log(title.textContent);  
                
                if (title.textContent.match(/\w+ Kirurg/)) {
                    matchedTitles.push(title.textContent);
                }
            });

            console.log(matchedTitles); 
            //replace
            // Zevendsimi i "Kirurg" me "Kirurg Plastik"
            doctorTitles.forEach(title => {
                let updatedTitle = title.textContent.replace("Kirurg", "Kirurg Plastik");
                title.textContent = updatedTitle; 
            });
        });
    </script> -->
    
</head>
<body>
    <header>
        <video autoplay loop muted>
            <source src="video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Doktorët e Spitalit</h1>
        <p><strong>Njihuni me doktorët tanë të shkëlqyer dhe kontaktoni për shërbime të specializuara.</strong></p>
    </header>
    <div class="container">
        <section class="doctor-section">
            <?php 
            $doctors = [$doctor1, $doctor2, $doctor3, $doctor4];

            foreach ($doctors as $doctor) {
                echo '<div class="doctor-card">';
                echo '<img src="Figurat/' . str_replace(" ", "-", $doctor->getName()) . '.png" alt="' . $doctor->getName() . '">';
                echo '<div class="doctor-name">' . $doctor->getName() . '</div>';
                $updatedTitle = str_replace("Kirurg", "Kirurg Plastik", $doctor->getTitle());
                echo '<div class="doctor-title">' . $updatedTitle . ' - ' . $doctor->getSpecialization() . '</div>';
                echo '<p>' . $doctor->getDescription() . '</p>';
                echo '<div class="doctor-contact">';
                echo '<a href="tel:' . $doctor->getContact() . '" class="contact-btn">Kontaktoni</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </section>

    <section class="emergency-section">
        <h2>Numrat që mund të na kontaktoni</h2>
        <ul style="list-style-type: disc;">
            <li><i class='fas fa-ambulance' style='font-size:24px; margin-right:10px; color:#023f7b;'></i><strong>Ndihma e shpejtë: </strong><mark>94</mark></li>
            <li><i class='fas fa-hospital-symbol' style='font-size:24px; margin-right:10px; color:#023f7b;'></i><strong>Klinika Healify: </strong><mark>0290321262</mark></li>
            <li><i class='fas fa-clinic-medical' style='font-size:24px; margin-right:10px; color:#023f7b;'></i><strong>Mjekësia familjare: </strong><mark>0290320053</mark></li>
        </ul>
    </section>
     </div>
   </body>
</html>
