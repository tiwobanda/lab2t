<?php
session_start();
require_once('assets/db.php');

if (!IsSet($_POST))					//if no $_POST array
{
session_destroy();				//clear session
header("Location: index.php");	//send user back to login page
exit();
}


if (!IsSet($_POST["email"]) || !IsSet($_POST["password"]))	//if no username or password submitted
{
session_destroy();				//clear session
header("Location: index.php");	//send user back to login page
exit();
}


// Check connection
if ($db === false) {
    die("Error: Could not connect to database. " . mysqli_connect_error());
}
//set variables
$email = $_POST['email'];
$password = $_POST['password'];

//run query
$sql = "SELECT email, password FROM users WHERE '$email' = email AND '$password' = password";

$result =mysqli_query($db,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$active = $row['active'];

$count =mysqli_num_rows($result);

if($count == 1){
    $_SESSION["name"] = $email;
    // $_SESSION["password"] = $password;
    header('Location:user_home.php');
}
else{
    $error = 'Your login email or password is invalid';
    header('Location: index.php');
}
