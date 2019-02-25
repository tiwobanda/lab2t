<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies - All Movies</title>
</head>
<body>
<header>

</header>
<main>
    <h2>Movies</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="all-movies.php">All Movies</a></li>
        <li><a href="marvel-movies.php">Marvel Studios Movies</a></li>
        <li><a href="after2010.php">Movies after 2010</a></li>
        <li><a href="xmen-films.php">X-men Firms</a></li>

    </ul>
</main>
<h3>All Movies</h3>
<p>Here you see all the movies that we have.</p>

<?php
require_once('db.php');

//check connection
if ($db === false) {
    die ("Error: could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * from marvelmovies";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
        echo "<tr>";
            echo "<th>xxx"

    while($row = mysqli_fetch_array($result))
}
?>
<footer>
    <p><p>&copy; <?php echo date("Y"); ?>. Movies.me</p>
</footer>
</body>
</html>