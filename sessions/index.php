<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome RevMaster</title>
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

<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Resshare</a>

        <!--<ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="user_home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">My Wedding</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Service Providers</a></li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Sign out</a></li>

        </ul> -->
    </nav>
</div>
    <br>

<main>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-6">
                <br><br>
                <h3>Resshare is an intuitive research paper sharing platform for Teams </h3>
                <p>Read more</p>
            </div>
            <div class="col-sm-6"><h3>Sign in here</h3>
            <form method="post" action="signin.php">
                <p><input type="text" class="form-control" name="email" id="email" placeholder="Enter your email"></p>
                <p><input type="password" class="form-control" name="password" id="pwd" placeholder="Enter your password"></p>
                <button type="submit" class="btn btn-dark">Sign in</button>
            </form>
                <br>
                <br>
                <h3>No account yet?</h3>
                <h4><a href="signup.php">Sign up now</a></h4>
            </div>
        </div>
    </div>

</div>
</main>
<br>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

    <a class="navbar-brand" href="#">Resshare</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
            <li class="nav-item nav-link">RevMaster &copy; <?php echo date("Y") ?></li>

        </ul>




</nav>
</div>
</body>
</html>