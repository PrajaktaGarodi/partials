<?php
  include("db_conn.php");

  if (isset($_POST['submit']))
  {
    echo "<script>alert('Submit');</script>";
    $username = $_POST['uname'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM  login  WHERE name ='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result))
    {
      $row = mysqli_fetch_array($result);

      $check = "SELECT * FROM login WHERE name = '$username' AND password = '$password'";

      $check_result = mysqli_query($conn, $check);

      if($check_result)
      {
        echo "<script> alert('Login Successfully');
        window.location.href='dashboard.php'</script>";
      }
      else
      {
        echo "<script> alert('Invalid Password')</script>";
      }
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .col-md-6{
    box-shadow: red 0px 0px 20px 3px;
    border-radius: 15px;

  }

</style>

<body> 
  <div class="container mt-5">
    <div class="row d-flex justify-content-center mt-5">
      
      <div class="col-md-6 mt-3 ">
        <h1 class="text-center">Login Form</h1>
        <form action="" method="post">
          <div class="form-group mt-2">
            <label for="username" class="form-label">User Name</label>
              <input type="text" name="uname" id="uname" class="form-control">
          </div>

          <div class="form-group mt-2">
            <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control">
          </div>

        
          <div class="col-md-12 d-flex justify-content-center flex-column align-items-center " >
            <button type="submit" name="submit" class="btn w-25 btn-primary mt-4">Login</button>
          <a href="" >Register now</a>
            
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