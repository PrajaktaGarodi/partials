<?php
    include("db_conn.php");



    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        // run kr
        $sql = "INSERT INTO testing (username, email, password, phone, gender) VALUES ('$username', '$email', '$password', '$phone', '$gender');";


        $insert = mysqli_query($conn, $sql);
        if($insert)
        {
            echo "<script>alert('Registration successful');</script>";
            // header("Location: form.php");
        }
        else
        {
            echo "<script>alert('Registration failed');</script>";
        }

    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form action="form.php" method="POST"> 
            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="genderMale" name="gender" value="Male" required>
                        <label class="form-check-label" for="genderMale">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="genderFemale" name="gender" value="Female" required>
                        <label class="form-check-label" for="genderFemale">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="genderOther" name="gender" value="Other" required>
                        <label class="form-check-label" for="genderOther">Other</label>
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" name="submit"   class="btn btn-primary w-100">Register</button>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
