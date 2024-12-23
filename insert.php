<?php 

include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();
$database->createUserTable();
$user = new User($db);

$user->createUser($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role']);    
$db->close();

?>