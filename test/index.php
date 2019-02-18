<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert form information into database</title>
</head>
<body>
<header>
    <h2>Signup</h2>
</header>
<main>
<p>Enter your details in the form below</p>
    <form method="post" action="">
        First name: <input type="text" name="first_name"><br>
        Last name: <input type="text" name="surname"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="Submit">
    </form>

</main>
<footer>
<p>&copy; <?php echo date("Y"); ?> Wedding Planit</p>
</footer>
</body>
</html>