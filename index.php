<?php 
$title="Welcome Page";
include 'includes/header.php'?>

<h1><?php echo $title ?></h1> 

<?php //php tag to facilitate using php functions

echo '<br/>';

echo 'Hello, Welome :) ';

echo '<br/>';

echo '<br/>';

echo '<br/>';

?>

<?php 

$name='Adrian Bailey';
$age= 26;

echo  '<h3>My name is '.$name.'<h3>';
echo '<br/>';
echo  '<h3>My age is '.$age. '<h3>';
echo '<br/>';

?>

<button type="button" class="btn btn-info">Click Here</button>
<a href="https://www.heroku.com/" class="btn btn-danger">Heroku.com</a>

<?php 

require 'includes/footer.php'

?>

