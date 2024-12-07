<?php
    include("db_conn.php");

    if (isset($_POST['submit']))
{

        $fullname = $_POST['name'];
        $emailaddress = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmPassword'];
    
       if($password == $confirmpassword)
       {

        $sql= "INSERT INTO phpform (username,emailaddress,password)VALUE
        ('$fullname','$emailaddress','$password')";
    
    
        $result = mysqli_query($conn, $sql);
    
        if ($result) 
        {
            echo "<script>alert('New record created successfully');
            window.location.href='index.php';</script>";
            
        } 
        else 
        {
            echo "<script>alert('created successfully')</script>";
        
        }
        

       } 
       else{
        echo "<script>alert('Password and Confirm Password must match')</script>";
       }


   
}  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h2 class="text-center mb-4">User Registration</h2>
      <form  action="register.php" method="POST" >

        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
          <div class="invalid-feedback">Full name is required.</div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>


        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
          <div class="invalid-feedback">Password is required.</div>
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
          <d class="invalid-feedback">Passwords must match.</d
        </div>

        <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const form = e.target;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      form.classList.add('was-validated');

      if (password !== confirmPassword) {
        document.getElementById('confirmPassword').setCustomValidity('Passwords do not match');
      } else {
        document.getElementById('confirmPassword').setCustomValidity('');
      }

      if (form.checkValidity()) {
        alert('Registration successful!');
        form.reset();
        form.classList.remove('was-validated');
      }
    });
  </script>
</body>
</html>
