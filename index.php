<?php 
$title="Welcome Page";
include 'includes/header.php'?>

<?php //php tag to facilitate using php functions

echo '<h1>Welcome Page<h1>';

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
<a href="https://www.heroku.com/" target="_blank" class="btn btn-danger">Heroku.com</a>

<?php 

require 'includes/footer.php'

?>

