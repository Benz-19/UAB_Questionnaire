<?php

namespace Admin;

include __DIR__ . "/../database.class.php";

use DbAdmin;
use Database;
use Exception;
use PDOException;


class Admin extends DbAdmin
{
    private $adminPassword;

    public function createAdminPassword($inputPassword)
    {
        $sql = "INSERT INTO admin (password) VAlUES (?)";
        $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$hashedPassword]);
    }

    public function adminLogin($InputPassword)
    {
        $sql = "SELECT password FROM admin";
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
                } else if ($column[$index][0] === $InputPassword) {
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
        } else {
            echo "Failed to execute the statement";
        }
    }

    public function adminLogout()
    {
        session_unset();
    }

    // Generating the unique student code
    public function generateStudentCode()
    {
        $randomCode = rand(10000, 20000);
        return $randomCode;
    }

    // setter

    public function setStudentCode()
    {
        if ($this->getStudentAccessCodes() === $this->generateStudentCode()) { //Checks if the unique code was generated before
            echo "Code Already exists... Generate another one....";
        } else {
            $studentAccessCode = $this->generateStudentCode();
            $hashedStudentAccCode = password_hash($studentAccessCode, PASSWORD_DEFAULT);
            $stmt = $this->connection()->prepare("INSERT INTO students(access_code) VALUES (?)");
            $stmt->execute([$hashedStudentAccCode]);
            // echo "New student code " . $studentAccessCode . " was successfully created...";
            return $studentAccessCode;
        }
    }

    //Getter

    public function getStudentAccessCodes()
    {
        $stmt = $this->connection()->prepare("SELECT access_code FROM students");


        if ($stmt->execute()) {
            try {
                $column = $stmt->fetchAll();
                $index = 0;
                while ($index !== count($column)) {
                    return $column[$index];  //returns each code
                    $index++;
                }
            } catch (Exception $error) {
                echo "Error: " . $error->getMessage();
            }
        }
    }

    public function getEvaluare()
    {
        try {
            $stmt = $this->connection()->prepare("SELECT * FROM evaluare"); // Fetch all columns
            $stmt->execute();
            return $stmt->fetchAll(); // Default fetch mode is PDO::FETCH_ASSOC
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
        }
    }

    public function getGeneralInfo()
    {
        try {
            $stmt = $this->connection()->prepare("SELECT * FROM informatii_generale"); // Fetch all columns
            $stmt->execute();
            return $stmt->fetchAll(); // Default fetch mode is PDO::FETCH_ASSOC
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
        }
    }

    public function getCareerInfo()
    {
        try {
            $stmt = $this->connection()->prepare("SELECT * FROM informatii_cariera"); // Fetch all columns
            $stmt->execute();
            return $stmt->fetchAll(); // Default fetch mode is PDO::FETCH_ASSOC
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
        }
    }
}

// Debugger
// $admin = new Admin;
// echo $admin->adminLogin("uab1234");
