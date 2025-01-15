<?php
    include("conn.php");

    if(isset($_POST['submit']))
    {

      echo "<script>alert('submit')</script>";
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $skill =   implode(',', $_POST['skills']);
      $message = $_POST['message'];

      $sql = "INSERT INTO tbl (name,email,phone,skill,message)VALUES('$name','$email','$phone','$skill','$message')";

      $result = mysqli_query($conn,$sql);


      if($result)
      {
        echo "<script>alert('Registration Successful...!')</script>";
      }
      else
      {
        echo "<script>alert('Registration failed...!')</script>";
      }

      mysqli_close($conn);

    }

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> submission Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Data Submission Form</h2>
    <form method="Post">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
      </div>
      <div class="mb-3">
        <label class="form-label">Skills</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="skillHTML" name="skills[]" value="HTML">
          <label class="form-check-label" for="skillHTML">HTML</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="skillCSS" name="skills[]" value="CSS">
          <label class="form-check-label" for="skillCSS">CSS</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="skillJS" name="skills[]" value="JavaScript">
          <label class="form-check-label" for="skillJS">JavaScript</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
