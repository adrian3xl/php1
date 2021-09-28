<?php 
$title="String Manipulation";
include 'includes/header.php'?>

   
<h2>PHP String Manipulation </h2>

<?php

$phase1= "student who came late";
$phase2="in class, stand with Rock";
$name="adrian bailey";

echo $phase1 . ", named Tiffany,". $phase2;
echo '<br/>';

echo '<hr/>';

echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
echo  'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
echo  'Upper case: ' . strtoupper($name).'<br/>';
echo  'Lower case : ' .strtoupper("THIS WAS ALL UPPER CASE").'<br/>';
echo '<hr/>';
echo 'Repeat String:' . str_repeat('a',10) .'<br/>';
echo 'Repeat String:' .strtoupper(str_repeat('a',10)) .'<br/>';
echo `Get a Substring:` . substr($name,`w`).'<br/>';

//Returns NULL

//echo gets position of string strpos($combine,'z').'<br/>';

echo 'Find Character "R":' . strchr($name, 'R').'<br/>';
echo 'Find Character "r":' . strchr($name, 'r').'<br/>';
echo 'Find Character "s":' . strchr($name, 's').'<br/>';
echo 'Find Character "e":' . strchr($name, 'e').'<br/>';


echo 'Find Length of String:' . strlen($name) . '<br/>';

echo 'without Trim:'. "A" . "B C D" . "E" . '<br/>';

echo 'Trim space on both sides:'. "A" . trim("B C D "). "E" . '<br/>';

echo 'Trim space to the left:'. "A" . ltrim("B C D "). "E" . '<br/>';
 
echo 'Trim space to the right:'. "A" . rtrim("B C D "). "E" . '<br/>';

echo 'Replace string with another:' . str_replace("stand", "sit",$phase2).'<br/>';
 
?>


<?php 

require 'includes/footer.php'

?>

