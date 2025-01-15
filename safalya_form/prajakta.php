<?php
include('pra_saf_conn.php');

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $father_name = $_POST['father_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO green_form(full_name , father_name , address , email , contact , gender) VALUE ('$full_name','$father_name','$address' , '$email', '$contact' , '$gender')";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Registration successful'); window.location.href
            ='Connection.php'</script>";

    } else {
        echo "<script>alert('Registration failed');</script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: green;
    }

    h1 {
        color: greenyellow;

    }

    .col-md-6 {
        background-color: whitesmoke;
        border-radius: 50px 0px 50px 0px;
        border: 5px solid green;
        box-shadow: 1px 0px 20px 4px greenyellow;

    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">FORM</h1>
                <form method="Post">
                    <div class="row  d-flex justify-content-center">
                        <div class="col-md-6 p-3 m-4">

                            <div class="form-group">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Father Name</label>
                                <input type="text" name="father_name" class="form-control">
                            </div>




                            <div class="form-group">
                                <label for="" class="form-label">Address</label>
                                <textarea name="address" id="address" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="emali" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Contact</label>
                                <input type="number" name="contact" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="" class="form-label">Gender</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                            </div>



                            <div class="col-md-12 d-flex justify-content-center ">

                                <button type="submit" name="submit" class="btn btn-success">Submit</button>

                            </div>

                        </div>



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