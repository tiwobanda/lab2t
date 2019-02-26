<?php
session_start();
require_once('assets/db.php');

//set variables

$email = $_POST['email'];
$email = $_POST['email'];

//check connection

if ($db === false) {
    die("Error: Could not establish connection. " . mysqli_error());
}

$sql = "SELECT email, password FROM users WHERE email = $email AND password = $password";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

if ($count ==1);