<?php

use Admin\Admin;

include __DIR__ . "/adminHome.php";

$admin = new Admin;


if (isset($_POST["submit"])) {

    echo '<div class="studentCode"><p>Successfully created a new student access code: </p>' . '</div>';
    echo '<p class="inner"> ' . $admin->setStudentCode() . '</p>';
}

if (isset($_POST["displayResponse"])) {
    // Fetch data from all methods
    $generalInfo = $admin->getGeneralInfo(); // Fetch data from informatii_generale
    $evaluare = $admin->getEvaluare(); // Fetch data from evaluare
    $careerInfo = $admin->getCareerInfo(); // Fetch data from informatii_cariera

    // Combine all columns dynamically
    $allColumns = [];
    $combinedData = [];

    //function to merge data by student_id
    function mergeDataByStudentId($mainData, $newData)
    {
        $result = [];
        foreach ($mainData as $row) {
            $studentId = $row['student_id'];
            $result[$studentId] = $row;
        }

        foreach ($newData as $row) {
            $studentId = $row['student_id'];
            if (isset($result[$studentId])) {
                $result[$studentId] = array_merge($result[$studentId], $row);
            } else {
                $result[$studentId] = $row;
            }
        }

        return array_values($result); //Returns the result
    }

    // Merge datasets based on student_id
    $combinedData = mergeDataByStudentId($generalInfo, $evaluare);
    $combinedData = mergeDataByStudentId($combinedData, $careerInfo);

    // Collect all unique column headers
    foreach ($combinedData as $row) {
        $allColumns = array_merge($allColumns, array_keys($row));
    }
    $allColumns = array_unique($allColumns);

    if (!empty($combinedData)) {
        echo "<table border='3'>";
        echo "<thead>";
        echo "<tr>";

        // Generate table headers dynamically
        foreach ($allColumns as $columnName) {
            echo '<th class="title">' . htmlspecialchars($columnName) . '</th>';
        }

        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Generate table rows dynamically
        foreach ($combinedData as $row) {
            echo "<tr>";
            foreach ($allColumns as $columnName) {
                echo '<td class="values">' . htmlspecialchars($row[$columnName] ?? '') . '</td>';
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No data available.";
    }
}



?>

<style>
    .title {
        padding: 0 12px;
        border-right: 3px solid black;
        border-bottom: 3px solid black;
    }

    .values {
        padding: 0 12px;
        border-right: 3px solid black;
        border-bottom: 3px solid black;
    }

    .studentCode {
        display: flex;
        justify-content: center;
    }

    .studentCode .inner {
        position: absolute;
        top: 570px;
        text-align: center;
    }

    .inner {
        color: red;
        text-align: center;
    }
</style>