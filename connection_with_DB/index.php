<?php
    include("db_conn.php");


    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];
     
        $sql = "INSERT INTO  feedback (name, email, rating, comments) VALUES('$name', '$email', '$rating', '$comments');";

        $insert = mysqli_query($conn, $sql);

       if ($insert)
       {
        echo "<script>alert(' Data Inserted Successfully');</script>";
       }
       else
       {
        echo "<script>alert('Failed to Insert Data');</script>";
       }
        
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback Form</title>
    <!-- Basic CSS for styling the form -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .feedback-form {
            background-color: #fff;
            padding: 25px;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        .feedback-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .feedback-form .form-group {
            margin-bottom: 15px;
        }
        .feedback-form label {
            display: block;
            margin-bottom: 5px;
        }
        .feedback-form input[type="text"],
        .feedback-form input[type="email"],
        .feedback-form select,
        .feedback-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .feedback-form textarea {
            resize: vertical;
            height: 100px;
        }
        .feedback-form button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .feedback-form button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success-message {
            text-align: center;
            color: green;
            font-size: 1.1em;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="feedback-form">
        <h2>User Feedback</h2>
        <form id="feedbackForm" action="YOUR_BACKEND_ENDPOINT" method="POST">
            <div class="form-group">
                <label for="name">Name<span class="error">*</span>:</label>
                <input type="text" id="name" name="name" placeholder="Your name.." required>
                <div class="error" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email<span class="error">*</span>:</label>
                <input type="email" id="email" name="email" placeholder="Your email.." required>
                <div class="error" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="rating">Rating<span class="error">*</span>:</label>
                <select id="rating" name="rating" required>
                    <option value="">Select a rating</option>
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Very Good</option>
                    <option value="3">3 - Good</option>
                    <option value="2">2 - Fair</option>
                    <option value="1">1 - Poor</option>
                </select>
                <div class="error" id="ratingError"></div>
            </div>

            <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" placeholder="Write your feedback.."></textarea>
            </div>

            <button type="submit" name="submit">Submit Feedback</button>
        </form>
        <div class="success-message" id="successMessage"></div>
    </div>

    
  
</body>
</html>
