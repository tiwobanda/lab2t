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
<header>
    <div class="navbar navbar-expand-sm bg-dark navbar-dark">
        <h4 c>RevMaster</h4>
    </div>

</header>
<main>
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-6"><h3>Welcome to RevMaster</h3></div>
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

        <nav>

        </nav>
    </div>
</main>
<footer>

    <p>RevMaster &copy; <?php echo date("Y") ?></p>

</footer>
</body>
</html>