<?php 
class Database{
    private $host = "localhost";
    private $db_name = "Lab_5b";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = new mysqli ($this->host, $this->username, $this->password, $this->db_name);
        try{
        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }else{

            echo "<script>console.log('Connected successfully');</script>";
        
        }

    }catch(Exception $e){
        echo "Connection error: " . $e->getMessage();
    }
        return $this->conn;
        
    }

    public function createUserTable(){
        $sql = "CREATE TABLE IF NOT EXISTS users(
            matric VARCHAR (10) PRIMARY KEY,
            name VARCHAR (50) NOT NULL,
            password VARCHAR (256) NOT NULL,
            role VARCHAR (10) NOT NULL );";

        $result = $this->conn->query($sql);
        if($result){
            echo "Table created successfully";
        }else{
            echo "Error creating table: " . $this->conn->error;
        }
    }
}

?>