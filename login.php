<?php
include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container-mt-5">
    <h1 style="text-align: center;">Login</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="authenticate.php" method="post">
                            <label for="matric">Matric: </label>
                            <input type="text" name="matric" id="matric" placeholder="Matric No." class="form-control" required>
                            <br>
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password" placeholder="password" class="form-control" required>
                            <br>
                            <input type="submit" value="Login" name="Login" class="btn btn-primary">
                        </form>

                        <label for="register"> <a href="registration.php">Register </a> here if you have not.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>