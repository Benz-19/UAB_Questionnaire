<?php

class Database
{
    private $host = "localhost";
    private $userName = "root";
    private $passw = "";
    private $dbName = "chestionar_absolvent";
    private $conn;

    public function connection()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName}";
            $this->conn = new PDO($dsn, $this->userName, $this->passw);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_ERRMODE);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }

        return $this->conn;
    }
}
