<?php 
$title="For Loop";
include 'includes/header.php'

?>

<h1><?php echo $title ?></h1>

<?php


for($count = 0;$count<5; $count++){

    echo '<p style="color:green">Hello <p>';
}

for($count = 0;$count<5; $count++){

    echo "<p> The count of hello is :$count </p>" ;
}

?>


<?php 

require 'includes/footer.php'

?>

