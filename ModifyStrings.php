<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
echo strtoupper($x);


$y = "Hello World!";
echo strtolower($y);

$z = "Hello World!";
echo str_replace("World", "Dolly", $z);

$a = "Hello World!";
$b = explode(" ", $a);

//Use the print_r() function to display the result:
print_r($b);
?>

</body>
</html>