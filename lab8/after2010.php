<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies - Movies after 2010</title>
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
<h3>Movies released after 2010</h3>
<p>Here you see all the movies that we have.</p>

<?php
require_once('db.php');

//check connection
if ($db === false) {
    die ("Error: could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
if ($result = mysqli_query($db, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Year Released</th>";
        echo "<th>Title</th>";
        echo "<th>Production Studio</th>";
        echo "<th>Notes</th>";
        echo "</tr>";
        //while ($row = mysqli_fetch_array($result)) {
        while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['marvelMovieID'] . "</td>";
            echo "<td>" . $row['yearReleased'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['productionStudio'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
//free result set
        mysqli_free_result($result);
    }
}else{
    echo "No records matching your query were found.";
}

//

?>
<footer>
    <p><p>&copy; <?php echo date("Y"); ?>. Movies.me</p>
</footer>
</body>
</html>
