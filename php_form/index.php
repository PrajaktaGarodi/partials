<?php
    include("db_conn.php");

    if (isset($_POST['submit']))
    {
        echo "<script>alert('Submit');</script>";
        $username = $_POST['username'];
        $password = $_POST['password'];

       $sql=  "SELECT * FROM phpform WHERE username = '$username' ";
       $result = mysqli_query($conn, $sql);

       if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);

        $check = "SELECT * FROM phpform WHERE username = '$username' AND password =  '$password'";

        $check_result = mysqli_query($conn, $check);

        if($check_result)
        {
            echo "<script> alert('login successfully')</script>";
        }
        else{
            echo "<script> alert('Invalid Password')</script>";
        }

       }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h3 class="text-center">Login</h3>
        <div id="message"></div>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
        
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#loginForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: "login.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        $("#message").html(response);
                    },
                    error: function() {
                        $("#message").html('<div class="alert alert-danger">Something went wrong!</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
