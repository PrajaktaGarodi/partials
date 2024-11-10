<?php
include("db_conn.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $emergencycontact = $_POST['emergencycontact'];
    $department = $_POST['department']; // Fixing the spelling here

    $sql = "INSERT INTO register (fullname, email, phonenumber, dateofbirth, gender, address, emergencycontact, deperment) VALUES ('$fullname', '$email', '$phonenumber', '$dateofbirth', '$gender', '$address', '$emergencycontact', '$department');";

    $insert = mysqli_query($conn, $sql);

    if ($insert) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Failed to Register');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .form-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-container">
      <h2 class="form-title">Hospital Registration Form</h2>
      <form method="POST" action="">
        <!-- Full Name -->
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Enter your full name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phonenumber" placeholder="Enter your phone number" required>
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dateofbirth" required>
        </div>

        <!-- Gender -->
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <div>
            <input type="radio" class="btn-check" name="gender" id="male" value="Male" autocomplete="off" required>
            <label class="btn btn-outline-primary" for="male">Male</label>

            <input type="radio" class="btn-check" name="gender" id="female" value="Female" autocomplete="off" required>
            <label class="btn btn-outline-primary" for="female">Female</label>

            <input type="radio" class="btn-check" name="gender" id="other" value="Other" autocomplete="off" required>
            <label class="btn btn-outline-primary" for="other">Other</label>
          </div>
        </div>

        <!-- Address -->
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
        </div>

        <!-- Emergency Contact -->
        <div class="mb-3">
          <label for="emergencyContact" class="form-label">Emergency Contact</label>
          <input type="tel" class="form-control" id="emergencyContact" name="emergencycontact" placeholder="Enter emergency contact number" required>
        </div>

        <!-- Department -->
        <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <select class="form-select" id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="general">General Medicine</option>
            <option value="cardiology">Cardiology</option>
            <option value="neurology">Neurology</option>
            <option value="orthopedics">Orthopedics</option>
            <option value="pediatrics">Pediatrics</option>
          </select>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
