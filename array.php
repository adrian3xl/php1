<?php
$title="Arrays";
include 'includes/header.php'?>

<h1>Arrays</h1>

<?php
$val=3;
//an array 

$values= array(1,2,3,4,5,6,7,8,9,10,50,25,64,79,80); //access numbers using index

echo $values[5];

echo "<p>$values[9]</p>";


$size = count($values);

echo "<p>Array numbers is size: count $size </p>";

echo"</br>";

//print out all numbers in array

echo"<p> List of numbers/values in array</p>";

for($count=0; $count < $size; $count++){

    echo"<p>$values[$count]</p>";
}

?>

<?php 

require 'includes/footer.php'

?>

