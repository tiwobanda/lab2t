<?php
session_start();					//retrieve or create session
if (!IsSet($_SESSION["name"]))	{	//user name must in session to stay here
    header("Location: index.php");	//if not, go back to login page
}
if (isset($_GET['id'])) {
    require_once('assets/db.php');
    $id = $_GET['id']; // assign variable for id
    $sql = "SELECT * from service_provider WHERE sp_id = '$id'"; //run query
    $result = mysqli_query($db, $sql) or die ("Bad Query: $sql");
    $row = ($row = mysqli_fetch_array($result));
}else {
    header("Location: user_home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wedding PlanIt - Search for Service Providers</title>
    <link rel="stylesheet" href="assets/style.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Wedding PlanIt</a>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="user_home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">My Wedding</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Service Providers</a></li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Sign out</a></li>

        </ul>
    </nav>
</header>


<main>

    <div class = "jumbotron" align ="center">
        <h2><?php echo $row['business_name'] ?></h2>

    </div>


    <div class="row">
        <div class="col-sm-2"></div>


        <div class="col-sm-8">



                   </div>
        <div class="col-sm-2"></div>
    </div>

</main>

<footer>

    <p>&copy; Copyright <?php echo date("Y") ?> Wedding PlanIt</p>

</footer>




</body>
</html>