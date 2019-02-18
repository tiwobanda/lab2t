<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
<header>
    <h2>What you can buy</h2>
</header>
<main>
    <?php
    $myage = $_POST ["myage"];
    if ($myage > 21){
        echo "You are over 21, you can by sausages rolls";
    } elseif ($myage > 16){
        echo "You are more than 16, you can buy mugs";
    } else {
        echo "You are less than 16, buy specs";
    }
    ?>
    <p>Hi <?php echo $_POST ["fname"]; ?> <br></p>
    <p> Since you are <?php echo $_POST ["myage"] . ", "; ?>you can only buy</p>


</main>
<footer>
    <p>(c) 2019 Tiwo Inc</p>
</footer>
</body>
</html>