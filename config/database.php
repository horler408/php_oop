<?php
class Database {
    // Database credentials
    private $host = "localhost";
    private $db_name = "practice_oop";
    private $username = "root";
    private $password = "";

    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql: host=". $this->host ."; dbname=" .$this->db_name, $this->username, $this->password);
        }catch(PDOException $e) {
            echo "Connection Error: " .$e.getMessage();
        }
        return $this->conn;
    }
} 

?>