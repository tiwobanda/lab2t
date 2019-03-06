<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System Lab9</title>
</head>
<body>
<header>
    <h1>The Super-hero System</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href="superheroform.html">Insert a Superhero</a></li>
    <li><a href="displaySuperheros.php">Display all Superheros</a></li>
    <li><a href="battle.php">Insert a Battle</a></li>
    <li><a href="displayBattles.php">Display all Battles</a></li>
</ul>
<?php
include ("../lab8/db.php");
$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while($row = $result->fetch_array());
{
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $id = $row['superheroID'];
    echo "<li> <a href='displayBattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li>";
}

?>
</body>
</html>