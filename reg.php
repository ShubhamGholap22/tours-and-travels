<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "tours";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// Variables to be inserted into the table
$name = $_POST['name'];
$mno = $_POST['mno'];
$email = $_POST['email'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];

// Sql query to be executed
$sql = "INSERT INTO `registration` (`name`, `mno`, `email`, `address`, `pincode`) VALUES ('$name', '$mno', '$email', '$address', '$pincode')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "<script>
    alert('Your request has been submitted successfully. We will get back to you soon.');
    window.location.href='reg.html';
    </script>";
}
else{
    echo "<script>
    alert('The record was not inserted successfully because of this error ---> ". mysqli_error($conn) ."');
    window.location.href='reg.html';
    </script>";
}
?>