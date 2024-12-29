<?php

class DbAdmin
{
    private $host = "localhost";
    private $userName = "root";
    private $passw = "";
    private $dbName = "chestionar_absolvent";
    private $conn;

    public function connection()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8";
            $this->conn = new PDO($dsn, $this->userName, $this->passw);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Set default fetch mode
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            exit;
        }

        return $this->conn;
    }
}
