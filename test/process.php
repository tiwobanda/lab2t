<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";


// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connection === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
    }
// Attempt to insert into database
$sql = "INSERT INTO users (first_name, surname, email, password) VALUES ('$_POST[first_name]','$_POST[surname]','$_POST[email]','$_POST[password]')";

if (mysqli_query($connection, $sql)){
    #echo "Successfully registred.";
    header('Location:home.php');
} else {

    echo "Error: Could not execute." . mysqli_error($connection);
}

mysqli_close($connection);
?>

