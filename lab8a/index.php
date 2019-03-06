<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Login Form without Session Lab 8a</title>
    <link rel="stylesheet" href="style.css" type="text/css"
</head>
<body>
<h1>PHP Log in Form without Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"/><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password"/><br><br>
        <input type="submit" name="submit" value="login"/>
    </form>

<div class="error">
    <?php //echo $error;?>
    <?php //echo $username; echo $password;?>
</div>
</div>
</body>
</html>