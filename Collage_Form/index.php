<?php
    include ("Connection.php");


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $password = $_POST['password'];

        $sql = "INSERT INTO students (full_name, email, phone, gender, course, password) VALUES ('$name', '$email', '$phone', '$gender', '$course', '$password');";


        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Registration successful'); window.location.href
            ='Connection.php'</script>";
                    
        } else {
            echo "<script>alert('Registration failed');</script>";
        }

        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-form {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-heading {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
    </style>
</head>

<body>
    <div class="registration-form">
        <h2 class="form-heading">Student Registration</h2>
        <form 
         method="POST">
            <!-- Full Name -->
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your full name" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <!-- Course -->
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" id="course" name="course" required>
                    <option value="">Select Course</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="B.Com">B.Com</option>
                    <option value="B.A">B.A</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="M.Sc">M.Sc</option>
                </select>
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a strong password" required>
            </div>
            <!-- Submit -->
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
