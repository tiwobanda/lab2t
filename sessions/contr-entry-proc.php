<?php

require_once('assets/db.php');

// Check connection
if ($db === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}

// Attempt to insert into database
$sql = "INSERT INTO contractors (first_name, surname, email, address, post_code, category, business_name)
VALUES ('$_POST[first_name]','$_POST[surname]','$_POST[email]','$_POST[address]','$_POST[post_code]','$_POST[category]','$_POST[business_name]')";

if (mysqli_query($db, $sql)){
    echo "Successfully registred.";
    header('Location:contr-entry.php');
} else {
    echo "Error: Could not execute." . mysqli_error($db);
}
mysqli_close($db);
?>