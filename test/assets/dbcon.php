<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";


$connection = mysqli_connect($servername, $username, $password, $dbname);
if ($connection === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}
