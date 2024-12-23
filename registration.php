<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center mb-4">Registration</h2>

            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="matric" class="form-label">Matric No.: </label>
                    <div class="col-3">
                        <input type="text" name="matric" id="matric" placeholder="Matric No." class="form-control" required>
                    </div>
                    <div class="invalid-feedback">
                        Please enter your matric number.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name: </label>
                    <div class="col-3">
                        <input type="text" name="name" id="name" placeholder="Your Name" class="form-control" required>
                    </div>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password: </label>
                    <div class="col-3">
                        <input type="password" name="password" id="password" placeholder="password" class="form-control" required>
                    </div>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role: </label>
                    <div class="col-3">
                        <select name="role" id="role" class="form-select" required>
                            <option value="">Please select</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="student">Student</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your role.
                        </div>
                    </div>

                </div>
                <br>
                <input type="submit" value="Register" name="submit" class="btn btn-primary">
                <br>
                <br>
                <label for="login"> <a href="login.php">Login </a> here if you have an account.</label>

            </form>
        </div>

    </div>



</body>

</html>