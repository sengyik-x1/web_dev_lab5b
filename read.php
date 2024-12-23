<?php 
include 'Database.php';
include 'User.php';
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}


$database = new Database();
$db = $database->getConnection();
$user = new User($db);
$users = $user->getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    <h1 style="text-align: center; margin-top:1em;">User List</h1>
    <table border="1" class="table table-bordered" style="width: 70%; margin: 0 auto; margin-top: 50px;">
        
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Level</th>
                <th style="text-align: center;">Action</th>
            </tr>
        

        
            <?php 
                if($users->num_rows> 0){
                    while($row = $users->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row["matric"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["role"]; ?></td>
                <td class="text-center"><a href="updateUser.php?matric=<?php echo $row["matric"]; ?>" class="btn btn-info" >Update</a> &nbsp; &nbsp;
                                        <a href="delete.php?matric=<?php echo $row['matric']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
    

        <?php 
                    }
                }else {
                    echo "No users found";
                }

                $db->close();
        ?>
    </table>
</body>
</html>