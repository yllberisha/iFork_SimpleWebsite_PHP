<?php
class Database {
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;
    
    public function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
    
    public function close() {
        $this->conn->close();
    }
}
// Initialize a new instance of the Database class
$db = new Database("localhost:4000", "root", "", "forkdb");

?>
