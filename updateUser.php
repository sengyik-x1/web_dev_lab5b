<?php
include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();
$result = new User($db);

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $matric = $_GET['matric'];
    $user = $result->getUser($matric);
    // if(!$user){
    //     echo " alert('User not found in database')";
    // }
    $db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update User</h1>

        <form action="update.php" method="post">
            <div class="mb-3">
                <label for="matric" class="form-label">Matric</label>
                <input type="text" name="matric" id="matric" class="form-control" value="<?php echo $user['matric']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Access Level</label>
                <select name="role" id="role" class="form-select">
                    <option value="lecturer" <?php if ($user['role'] == 'lecturer') echo 'selected'; ?>>Lecturer</option>
                    <option value="student" <?php if ($user['role'] == 'student') echo 'selected'; ?>>Student</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Update" name="update" class="btn btn-primary"> &nbsp; &nbsp;
                <input type="reset" value="Cancel" class="btn btn-danger">
            </div>
        </form>
    </div>

</body>

</html>

<?php } ?>
