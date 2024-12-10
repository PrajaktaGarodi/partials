<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="mydatabase";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        // echo "Connected successfully";
    }
?>