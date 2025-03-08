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
$email = $_POST['email'];
$pno = $_POST['pno'];
$dest = $_POST['dest'];
$t_date = $_POST['t_date'];
$num_travellers = $_POST['num_travellers'];

// Sql query to be executed
$sql = "INSERT INTO `booking` (`name`, `email`, `pno`, `dest`, `t_date`, `num_travellers`) VALUES ('$name', '$email', '$pno', '$dest', '$t_date', '$num_travellers')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo '<script>alert("Your request has been submitted successfully. We will get back to you soon.")</script>';
}
else{
    echo '<script>alert("The record was not inserted successfully because of this error ---> '. mysqli_error($conn) .'")</script>';
}
?>