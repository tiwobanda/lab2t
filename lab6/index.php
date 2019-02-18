<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Learning PHP Page</title>
</head>
<body>

<?php
echo "Hello World <br>";
echo "Hello, world! <br>";
echo "Hello," . " " . "world" . "! <br>";
echo 5 * 7 . "<br>";
$myname = "Fredo Baggins";
$myage = 111;
echo "Mayname is " . $myname . " and I am " . $myage . "<br>";
?>

<?php
echo "I get printed! <br>";
//I dont know! I am a coment.

# Comments can also be written like this

/*I dont get printed either
and neither do I */
?>

<?php
$name = "Edgar";

if ($name == "Simon") {
    print "I know you!";
}
else {
    print "Who are you!";
}
?>

<!-- Specs, Mugs, and Sausages Rolls -->
<?php
$myzaka > 1;

if ($myzaka > 21) {
    echo "You are over 21, you can buy Sausages";
} elseif ($myzaka > 18) {
    echo "You are over 18, you can buy mugs";
    } else {
    echo "You can buy specs";
    }
?>
<br><br>
<h2>Arrays</h2>
<?php
$myArray =array("do","re","mi"); //declare the array
echo $myArray[0]. "<br>"; //outputs "do"
$myArray[1] = "la"; //modifies position 1 (re) replaces it with la
echo $myArray[1];
unset($myArray[2])
        ?>
<h2>Arrays activity</h2>
<?php
$provisionedActivity =array("Specs","Mugs","Sausage Rolls");

foreach ($provisionedActivity as $value){
    print "<p>$value</p>";
        $provisionedActivity[1]= "hugs"; //replace mugs with hugs
           }

echo $provisionedActivity[1]; //output
unset($provisionedActivity[2]);
echo $provisionedActivity[2];
foreach ($provisionedActivity as $value){
    print "<p>$value</p>";
    $provisionedActivity[1]= "hugs";
}

?>
<h2>Loops</h2>
<?php
for($i=1; $i<10;$i++){
echo "<p>Hello! the number is: $i</p>";
}
?>

</body>
</html>