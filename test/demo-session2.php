<?php
//start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo Session 1</title>
</head>
<body>

<?php
//Echo session variables
echo $_SESSION["favcolor"] . "<br>";
echo $_SESSION["favanimal"] . ".";
?>


<header>
    <h2>PHP Session here</h2>
</header>
<main>
    <p>Nothing yet</p>

</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Wedding Planit</p>
</footer>
</body>
</html>