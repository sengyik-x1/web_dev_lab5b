<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form action="insert.php" method="POST">
        <div class="mb-3">
            <label for="matric" class="form-label">Matric: </label>
            <input type="text" name="matric" id="matric" placeholder="Matric No."  required>
        </div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <br>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="password" required>
        <br>
        <br>
        <label for="role">Role: </label>
        <select name="role" id="role" required>
            <option value="">Please select</option>
            <option value = "lecturer">Lecturer</option>
            <option value = "student">Student</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Register" name="submit" class="btn btn-primary">

    </form>
    
</body>
</html>