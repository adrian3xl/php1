<?php
$title="If Statement";
include 'includes/header.php'?>

<h1>If Statement</h1>


<?php

echo '<h1>If Statement<h1>';

$grade= 90;

if($grade >= 50){

    echo '<h2 style="color:green"> you have passed<h2>';
}else{

  echo '<h2 style="color:red"> unfortunaly you were unsuccessful <h2>';
}

$grade ='A';

if($grade =='A'){

    echo '<h2 style="color:purple"> You are Awesome <h2>';
}elseif($grade =='B'){

  echo '<h2 style="color:brown">Good Try <h2>';
}elseif($grade =='C'){

}else{
    echo '<h2 style="color:red">You have failed <h2>';
}


?>


<?php 

require 'includes/footer.php'

?>

