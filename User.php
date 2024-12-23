<?php

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function createUser($matric, $name, $password, $role)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (matric, name , password, role) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssss", $matric, $name, $password, $role);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return "error" . $stmt->error;
            }
        } else {
            return "Error: " . $this->conn->error;
        }
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getUser($matric)
    {
        $sql = "SELECT * FROM users WEHERE matric =?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $matric);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();
            return $user;
        } else {
            return "Error: " . $this->conn->error;
        }
    }

    public function updateUser($matric, $name, $role)
    {
        $sql = "UPDATE users SET matric = ?, name = ?, role = ? WHERE matrci = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sss", $matric, $name, $role);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return "Error: " . $stmt->error;
            }
        } else {
            return "Error: " . $this->conn->error;
        }
    }

    public function deleteUser($matric){
        $sql = "DELETE FROM users WHERE matric = ?";
        $stmt = $this->conn->prepare($sql);
        if($stmt){
            $stmt->bind_param("s", $matric);
            $result = $stmt->execute();

            if($result){
                return true;
            }else{
                return "Error: " . $stmt->error;
            }

        } else {
            return "Error: " . $this->conn->error;
        }
    }
}

?>