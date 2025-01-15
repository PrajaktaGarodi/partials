<?php
    include("db_conn.php");

    if (isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];

        $sql =  "INSERT INTO user (fname,lname,email,contact,password) VALUES('$fname','$lname','$email', '$contact','$password')";

       $result = mysqli_query($conn , $sql);

        if($result)
        {
            echo "<script>alert('Registration successful!'); 
            window.location.href = 'index.php'</script>";
        }
        else
        {
            echo "<script>alert('Registration failed!');</script>";
        }

        mysqli_close($conn);
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .col-md-8
    {
        box-shadow: rgb(228, 205, 52) 0px 0px 20px 20px;
        border-radius: 20px;
    }
  </style>
  <body>
    <div class="container">
        <div class="row">

            <div class="col-md-12 d-flex justify-content-center mt-5">
               
                <div class="col-md-8 p-4">
                    <h1 class="text-center" style="color: rgb(248, 51, 116)">Registration Form</h1>

                    <form method="POST">
                  <div class="form-group m-3">
                        <label for="fname" class="form-lable">FIRST NAME </label>
                        <input type="text" name="fname" id="fname" class="form-control">
                    </div>

                    <div class="form-group m-3">
                        <label for="lname" class="form-lable">LAST NAME </label>
                        <input type="text" name="lname" id="lname" class="form-control">
                    </div>

                    <div class="form-group m-3">
                        <label for="email" class="form-lable">EMAIL </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>


                    <div class="form-group m-3">
                        <label for="contact" class="form-lable">CONTACT</label>
                        <input type="number" name="contact" id="contact" class="form-control">
                    </div>
                
              
                    <div class="form-group m-3">
                        <label for="password" class="form-lable">PASSWORD</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group m-3">
                        <label for="confirmpassword" class="form-lable">CONFIRM PASSWORD</label>
                        <input type="confirmpassword" name="confirmpassword" id="confirmpassword" class="form-control">
                    </div>

                    <div class="col-md-12 d-flex justify-content-center flex-column align-items-center ">
                        <button type="submit" name="submit" class="btn w-25 btn-primary mt-4">Submit</button>


                    </div>

                </form>

                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>