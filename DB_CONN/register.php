<?php
include("db_conn.php");

if (isset($_POST['submit'])) {
    echo "<script>alert('Submit');</script>";
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $sql = "SELECT * FROM login  WHERE name = '$uname'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        echo "<script>alert('Username already exists');</script>";
    } else {
        if ($password == $cpassword) {
            // $password = password($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO login (name, email, phone_no, password) VALUES ('$uname', '$email', '$phone', '$password')";

            $row = mysqli_query($conn, $sql);

            if ($row) {
                echo "<script>alert('Registration Successful'); window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Failed to Register');</script>";
            }
        }
        else {
            echo "<script>alert('Password and Confirm Password do not match');</script>";
        }
    }
}


?>







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    h1 {
        color: navy;
    }

    .col-md-6 {
        box-shadow: purple 1px 0px 20px 20px;

    }
</style>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-6 p-5">
                <h1 class="text-center">Registration Form</h1>

                <form action="" method="post">
                    <div class="form-group mt-5">
                        <label for="uname" class="form-label">User Name</label>
                        <input type="text" name="uname" id="uname" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="email" class="form-label"> Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="number" class="form-label">Phone No</label>
                        <input type="number" name="number" id="number" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="password" class="form-label"> Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="confirmpassword" name="confirmpassword" id="confirmpassword" class="form-control">
                    </div>


                    <div class="col-md-12 d-flex justify-content-center flex-column align-items-center ">
                        <button type="submit" name="submit" class="btn w-25 btn-primary mt-4">Submit</button>


                    </div>




                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>