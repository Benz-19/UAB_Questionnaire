<?php

use Student\Student;

include "form.php";
$student = new Student();

if (!isset($_POST["sub"])) {
    echo "Failed to submit this form.";
} else {
    // Section 1 -- Informatii Generale
    $_POST["university"] = "Universitatea “1 Decembrie 1918” din Alba Iulia";
    $institutia = $_POST["university"];
    $facultate = $_POST["faculty"];
    $program_de_studii = $_POST["program"];
    $tip_de_diploma = $_POST["studyType"];
    $anul_de_nasterii = $_POST["dob"];
    $an_inceput_programul = $_POST["yearOfStudyStart"];
    $an_sfarsit_programul = $_POST["yearOfStudyEnd"];

    // Insert into informatii_generale and get the student ID
    $student->setStudentGenInfo($institutia, $facultate, $program_de_studii, $anul_de_nasterii, $tip_de_diploma, $an_inceput_programul, $an_sfarsit_programul);


    // Get student ID
    $id_student = $student->getStudentId();

    // Section 2 -- Evaluare
    $user_responses = [];
    for ($i = 1; $i <= 45; $i++) {
        $user_responses[] = $_POST["q$i"] ?? null; // Collects all answers
    }

    // Insert into evaluare
    $student->setStudentEvaluare($id_student, $user_responses);

    // Section 3 -- Informații Carieră
    $situatiaProfesionala = $_POST["situatiaProfesionala"];
    $company = $_POST["company"];
    $greenJob = $_POST["greenJob"];
    $companyType = $_POST["companyType"];
    $infiintariiSocietatii = $_POST["infiintariiSocietatii"];
    $domeniulActivitate = $_POST["domeniul_de_activitate"];
    $locatieMunca = $_POST["locatie_munca"];
    $startYear = $_POST["startYear"];
    $rolulPresent = $_POST["rolulPresent"];
    $positionMatch = $_POST["positionMatch"];
    $careerHelp = $_POST["careerHelp"];

    if ($domeniulActivitate === "") {
        $domeniulActivitate = "NIL";
    }

    if ($rolulPresent ===  "") {
        $rolulPresent = "NIL";
    }

    // Insert into informatii_cariera
    $student->setStudentCareerInfo($id_student, $situatiaProfesionala, $company, $greenJob, $companyType, $infiintariiSocietatii, $domeniulActivitate, $locatieMunca, $startYear, $rolulPresent, $positionMatch, $careerHelp);

    echo '<div id="successMessage" class="alert alert-success mt-3">
           <p> Formularul a fost completat cu succes!</p>
           <p> Vă mulţumim că ați completat Chestionarul...<br> Vă Puteți deconecta!</p>
           <p>
                <form action="../validate/studentLogout.validate.php" method="POST">
                    <div>
                        <button type="submit" name="logout" class="btn btn-danger ms-3">Logout</button>
                    </div>
                </form>
            </p>
           </div>';
}
?>

<style>
    #successMessage {
        width: 100%;
        height: 250px;
        position: absolute;
        top: 320px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
</style>

<script>
    // Success message
    function showSuccessMessage() {
        const isValid = validateSection(sections[currentSection].id);

        if (isValid) {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

            // Show the success message
            const successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block";

            setTimeout(() => {
                successMessage.style.display = "none";
            }, 12000);
        } else {
            scrollToFirstInvalid(sections[currentSection].id);
        }
    }
</script>