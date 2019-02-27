<?php
require_once('assets/db.php');

//check connection
if ($db === false) {
    die ("Error: could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * from contractors";
if ($result = mysqli_query($db, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      #  echo "All Contractors";

        //while ($row = mysqli_fetch_array($result)) {
        while($row = $result->fetch_array()){

            echo "<div class='card'>";
            echo "<div class='card-header'>" . $row['business_name'] . "</div>";
            echo "<div class='card-body'>" . $row['category'] . "</div>";
            echo "</div>" . "<br>";
        }

//free result set
        mysqli_free_result($result);
    }
}else{
    echo "No records matching your query were found.";
}
