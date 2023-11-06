<?php

class DatabaseConnection {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct() {
        $this->host = 'db';
        $this->username = 'user';
        $this->password = 'secret';
        $this->database = 'docker-php';
    }

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<pre>';
            var_dump($e);
            die("Connection failed: " . $e->getMessage());
        }
    }

    function getUsers() {
        $stmt = $this->connection->prepare("SELECT * FROM users");
        $stmt->execute();

        return $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
    public function close() {
        $this->connection = null;
    }
}
