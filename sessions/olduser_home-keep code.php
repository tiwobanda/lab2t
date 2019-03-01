<?php
session_start();					//retrieve or create session
if (!IsSet($_SESSION["name"]))	{	//user name must in session to stay here
    header("Location: index.php");	//if not, go back to login page
}
#?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User home Wedding PlanIt</title>
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
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">My Wedding</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Service Providers</a></li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Sign out</a></li>

        </ul>
    </nav>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"><p>Left</p></div>
        <div class="col-sm-6"><h3><h3>User Home Page</h3>

                <p>Welcome, <?php echo $_SESSION["name"]; ?>!</p>
                <p>This is your home page.</p>
                <p>We need to make sure that your information is up to date. Please update your your Profile</p>
                <?php
                include 'contractors.php';
                ?>


        </div>
        <div class="col-sm-3"><p>Right</p></div>

    </div>
</div>


<!--
    This form allows you to logout by invoking the logoutphp script.
-->

<footer>

    <p>&copy; Copyright <?php echo date("Y") ?> Wedding PlanIt</p>

</footer>

</body>
</html>
