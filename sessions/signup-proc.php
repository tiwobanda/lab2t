<?php
require_once('assets/db.php');

//check connection to database
if ($db === false){
    die("Error: Could not connect to databse. " . mysqli_error());
} else {
    $sql = "INSERT INTO users (first_name, surname, email, password) VALUES ('$_POST[first_name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]')";
    if (mysqli_query($db, $sql)){
        header('Location:user_welcome.php');
    } else {
        echo "Error: Could not execute." . mysqli_error();
    }
}
