<?php 
include 'Database.php';
include 'User.php';
session_start();
if(isset($_POST['Login']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $database = new Database();
    $db = $database->getConnection();

    $matric = $db->real_escape_string($_POST['matric']);
    $password = $db->real_escape_string($_POST['password']);
    print_r($password);

    

    if(!empty($matric) && !empty($password)){
        $users = new User($db);
        $user = $users->getUser($matric);
        if($user && password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['name'];
            echo "<script> alert('Login successful')</script>";
            header('Location: read.php');
            exit();
        } else{
            echo "<script> alert('Login failed')</script>";
            echo "<label> Invalid username or password, try <a href='login.php'>login </a> again.</label>";
        }
    } else {
        echo "<script> alert('Please fill in all fields')</script>";
    }

}

?>