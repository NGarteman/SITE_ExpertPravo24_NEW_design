<?php
if (isset($_POST['register'])) {
    $host = "localhost";
    $username = "mysql";
    $password = "mysql";
    $database = "clients1"; //also added semi colon and what database name
    $conn = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); //I've added $conn inside mysqli_real_escape_string expected 1st param
    $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $date = date("Y-m-d");

    $password = md5($password);

    $sql = "INSERT INTO users (first_name, last_name, email, password, sign_up_date) VALUES ('$first_name', '$last_name', '$email', '$password', '$date')";
    $query = mysqli_query($conn, $sql); // I think this will add data in your database.

    if (!$conn) { //I change this from mysql_query($sql)
        die('Error: ' .mysqli_error());
    } else {
       echo "Entry added successfully";

       mysqli_close($conn); 
    }
}