<?php 
include 'Database.php';
include 'User.php';

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
    <table border="1" class="table table-bordered" style="width: 80%; margin: 0 auto; margin-top: 50px;">
        
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Level</th>
                <th colspan="2">Action</th>
            </tr>
        

        
            <?php 
                if($users->num_rows> 0){
                    while($row = $users->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row["matric"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["role"]; ?></td>
                <td><a href="#" class="btn btn-info">Update</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
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