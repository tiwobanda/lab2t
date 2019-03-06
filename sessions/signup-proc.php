<?php
#session_start();					//retrieve or create session
#if (!IsSet($_SESSION["name"])) {		//user name must in session to stay here
#    header("Location: index.php");	//if not, go back to login page
#}


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

//Will work on this later to try and get the code to run on if submit was clicked in previous page
#if (isset($_POST['submit'])) { // check if submit was clicked and set variables
#    $first_name = $_POST['first_name'];
 #   $surname = $_POST['surname'];
  #  $email = $_POST['email'];
   # $password = $_POST['password'];

    //check connection to database
#    if (!$db){
 #       die("Error: Could not connect to databse. " . mysqli_error());
  #  }else{
  #      $sql = "INSERT INTO users (first_name, surname, email, password) VALUES ('$first_name', '$surname', '$email', '$password')";
   #     if (mysqli_query($db, $sql)){
    #        header('Location:user_welcome.php');
     #   }else {
      #      echo "Error: " . $sql . "<br>" . mysqli_error();
       # }

  #  }

#}else {
 #   header("Location: index.php");
#}


