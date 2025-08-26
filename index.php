<?php
// prints ... //
echo "Hello, World!";
?>

- - -

<?php
echo "Hello, World!";
$a = 5
$b = 6;
$sum = $a + $b;
echo "The sum of $a and $b is $sum.";
?>

- - -

<?php
echo "Enter the first number: ";
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$sum = $a + $b;
echo "The sum of $a and $b is $sum.";
?>

- - -
/* Flowgorithm - ..for.. */

<?php
for ($x = 1; $x <= 100; $x++) {
    echo $x . PHP_EOL;
}
?>
