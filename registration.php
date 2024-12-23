<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <form action="" method="POST">
        <label for="matric">Matric: </label>
        <input type="text" name="matric" id="matric" required>
        <br>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
        <label for="role">Role: </label>
        <select name="role" id="role">
            <option value = "lecturer"></option>
            <option value = "student"></option>
        </select>
        <br>
        <button type="submit">Submit</button>

    </form>
    
</body>
</html>