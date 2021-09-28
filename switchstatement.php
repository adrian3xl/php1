<?php
$title="Switch Statement";
include 'includes/header.php'?>

<h1>Switch Statement</h1>

<h2> Click on the links below for relevant pages</h2>

<ul>
<li><a href="index.php">Home Page</a></li> 
<li><a href="array.php">Simple Array and print out</a></li> 
<li><a href="forloop.php">Simple Forloop and print out</a></li> 
<li><a href="whileloop.php">Simple While loop and print out</a></li> 
<li><a href="ifstatement.php">Simple If statement and print out</a></li> 
<li><a href="switchstatement.php">Simple Switch statement and print out</a></li> 
</ul>



<?php 

$color='red';
//switch statements to display a option of colors base on on selected or choosen color in system
switch($color){

    case 'red';
    echo '<h2 style="color:red">The System color is RED <h2>';
    break;

    case 'blue';
    echo '<h2 style="color:blue">The System color is BLUE <h2>';
    break;

    case 'orange';
    echo '<h2 style="color:orange">The System color is BLUE <h2>';
    break;
}

?>


<?php 

require 'includes/footer.php'

?>

