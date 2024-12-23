<?php 
class Database{
    private $host = "localhost";
    private $db_name = "Lab_5b";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = new mysqli ($this->host, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }else{
            echo "Connected succesfully";
        }

        return $this->conn;
    }
}

?>