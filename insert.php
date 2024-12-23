<?php 

include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();
$database->createUserTable();
$user = new User($db);

$user->createUser($_POST['matric'], $_POST['name'], trim($_POST['password']), $_POST['role']);    
print_r($_POST['password']);
$db->close();

?>