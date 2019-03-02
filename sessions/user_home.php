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
    <title>Wedding PlanIt - User Home</title>
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


<div class="jumbotron" align="center">
    <h2>Search for Service Providers</h2>
    <form method="GET" action="search_providers.php">
        <div class="form-group">

            <select class="form-control-sm"  name="search_value">

                <option value="">Select Service Provider category to search</option>
                <option value="beautician">Beautician</option>
                <option value="caterer">Caterer</option>
                <option value="jeweller">Jeweller</option>
                <option value="venue">Venue</option>
                <option value="flowers">Flowers </option>
                <option value="photography">Photography </option>
                <option value="music">Music</option>
                <option value=" Beauticians">Beauticians</option>
                <option value="decor">Decor</option>
                <option value="weddingplanners">Wedding Planners</option>
                <option value="dressers">Dresses</option>
            </select>
            &nbsp;
            <input type="submit" value="Search">
        </div>
    </form>


</div>

<footer>

    <p>&copy; Copyright <?php echo date("Y") ?> Wedding PlanIt</p>

</footer>




</body>
</html>
