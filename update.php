<?php 
include 'Database.php';
include 'User.php';
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    $user->updateUser($_POST['matric'], $_POST['name'], $_POST['role']);
    $db->close();
    header('Location: read.php');
}


?>