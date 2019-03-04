<?php
include ("../lab8/db.php"); //establish connection with database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required";
}else
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT uid FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql); //variable to hold the result of the query
    if(mysqli_num_rows($result) == 1) //check if results are in one row
    {
        header("location: home.php"); //redirect to user home
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>

