<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    
    private $dbh;
    private $stmt;

    public function __construct(){
        // Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage()); // Log the error
            throw new Exception("Database connection failed. Please try again later.");
        }
    }
    
    

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if (is_null($type)){
            switch (true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function singleColumn() {
        try {
            $this->stmt->execute();
            return $this->stmt->fetchColumn();
        } catch (PDOException $e) {
            error_log("Failed to fetch column: " . $e->getMessage());
            throw new Exception("Error occurred while fetching data.");
        }
    }

    public function execute(){
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            error_log("Query execution failed: " . $e->getMessage());
            throw new Exception("Query execution failed. Please try again later.");
        }
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount();
    }

    public function errorInfo() {
        if ($this->dbh) {
            return $this->dbh->errorInfo(); // Fetch PDO error information
        }
        return null;
    }

    // Method to get last insert ID
    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }
}
