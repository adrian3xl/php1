<?php
$title="While Loop";
include 'includes/header.php'?>
    
<h1>While Loop</h1>


<?php
//utilizing while loop
$age=0;

while($age<10){

    echo'<p> The age in system is less than 10 </p>';
    $age++;

}
echo 'Exiting loop...  ...  ...';
echo '<br/>';
echo '<br/>';
echo '<br/>';


?>



<?php
//utilizing do while loop
echo 'Entering  loop...  ...  ...';

$age=0;
do{
    echo'<p> The age in system is less than 10 </p>';
    $age++;
}
while($age<20);

echo 'exiting loop...  ...  ...'


?>

<?php 

require 'includes/footer.php'

?>

