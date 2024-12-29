<?php

namespace Student;


use Database;
use Exception;

class Student extends Database
{
    // private $studentPin;
    private $student_id;

    public function studentLogin($InputPassword)
    {
        $sql = "SELECT access_code FROM students";
        $stmt = $this->connection()->prepare($sql);

        if ($stmt->execute()) {
            $column = $stmt->fetchAll();
            $index = 0;
            $flag = false;

            while ($index !== count($column)) {
                if (password_verify($InputPassword, $column[$index][0])) {
                    echo $column[$index][0];
                    $flag = true;
                    break;
                }
                echo $flag;
                $index++;
            }
            if ($flag === false) {
                echo "Failed to find the user";
                return $flag;
            } else {
                return $flag;
            }
        }
    }

    public function studentLogout()
    {
        if (isset($_SESSION["logout"]) === TRUE || isset($_SESSION["logout"])) {
            session_unset();
            session_destroy();
            echo
            '<script>
                window.history.forward();
            </script>';
        }
    }


    // Setters
    public function setStudentGenInfo($institutia, $facultate, $program_de_studii, $anul_de_nasterii, $tip_de_diploma, $an_inceput_programul, $an_sfarsit_programul)
    {
        try {
            $sql = "INSERT INTO informatii_generale (institutia, facultate, program_de_studii, anul_de_nasterii, tip_de_diploma, an_inceput_programul, an_sfarsit_programul) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$institutia, $facultate, $program_de_studii, $anul_de_nasterii, $tip_de_diploma, $an_inceput_programul, $an_sfarsit_programul]);

            // Return the last inserted ID
            return $this->connection()->lastInsertId();
        } catch (Exception $error) {
            die("Error inserting student info: " . $error->getMessage());
        }
    }

    public function setStudentEvaluare($id_student, $user_responses)
    {
        $id_student = $this->getStudentId();
        $this->student_id = $id_student;

        try {
            $placeholders = rtrim(str_repeat('?,', 46), ','); // 46 placeholders (1 for ID + 45 responses)
            $sql = "INSERT INTO evaluare (student_id, evaluare_optiuni_conditii_studiu, configurare_program_studiu, interactiune_personal_didactic, interactiune_studenti_colegi, evaluare_examene, influenta_politica_universitate, indrumare_examene, indrumare_generala, materiale_didactice, dotare_practica_echipamente, calitate_predare_didactica, metode_predare_invatere, facilitati_cazare, facilitati_masa, stare_cladiri, dotare_biblioteci, stagii_practica_national, stagii_practica_international, acces_echipamente_tehnice, cercetare_predare_invatere, calitate_echipamente_laborator, cunoastere_domeniu_studiu, cunoastere_alte_domenii, gandire_analitica, acumulare_cunostinte, negociere_eficienta, actiune_conditii_stres, identificare_oportunitati, coordonare_activitati, gestionare_timp, lucru_echipa, mobilizare_resurse_umane, exprimare_punct_de_vedere, exercitare_autoritate, utilizare_calculator_internet, idei_solutii_noi, indoiala_idei, prezentare_produse_rapoarte, elaborare_documente, scriere_conversatie_limba_straina, interpretare_norme_drept, materiale_biblioteca, stagii_practica_parteneriate, oportunitati_practica_erasmus, servicii_consiliere_orientare_cariera) VALUES ($placeholders)";

            $stmt = $this->connection()->prepare($sql);
            $stmt->execute(array_merge([$this->student_id], $user_responses));
        } catch (Exception $error) {
            die("Error inserting evaluare data: " . $error->getMessage());
        }
    }

    public function setStudentCareerInfo($id_student, $situatiaProfesionala, $company, $greenJob, $companyType, $infiintariiSocietatii, $domeniulActivitate, $locatieMunca, $startYear, $rolulPresent, $positionMatch, $careerHelp)
    {
        $id_student = $this->getStudentId();
        $this->student_id = $id_student;
        try {
            $sql = "INSERT INTO informatii_cariera (student_id,situatie_profesionala, companie_infiintata_asociat, loc_munca_green_job, societate_infiintata_asociat, anul_infiintarii_societatii, domeniu_activitate_societate, localitate_tara_munca, data_incepere_munca, functie_actuala, corespundere_post_specializare, pregatire_profesionala_utila) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$this->student_id, $situatiaProfesionala, $company, $greenJob, $companyType, $infiintariiSocietatii, $domeniulActivitate, $locatieMunca, $startYear, $rolulPresent, $positionMatch, $careerHelp]);
        } catch (Exception $error) {
            die("Error inserting career info: " . $error->getMessage());
        }
    }

    public function setStudentId()
    {
        $stmt = "SELECT student_id FROM informatii_generale";

        $result = $this->connection()->prepare($stmt);

        if ($result->execute()) {
            $values = $result->fetchAll();
            // $size = count($values);

            // for ($i = 0; $i < $size; $i++) { //Debugger

            //     echo $values[$i][0];
            // }
            return $values;
        } else {
            echo "Failed to get query the db.";
        }
    }

    // Getter
    public function getStudentId()
    {
        $StudentIdList = $this->setStudentId();
        $noStudents = count($StudentIdList);
        if (empty($noStudents)) {
            echo "<br>No student record was found<br>";
            return 0;
        } else {

            $lastStudent = $noStudents;
            return $lastStudent;
        }
    }
}

// // Test case
// $student = new Student;
// echo "First pass test: ";
// $student->studentLogin(14553);
// echo "<br>";
// echo "Second pass test: ";
// $student->studentLogin(68454);


// // 14553 --- existing password