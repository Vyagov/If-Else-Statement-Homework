<?php
/* Създайте 2 променливи с различни стойности в даден PHP скрипт.
Измислете начин програмно да размените стойностите им.
Разпечатайте новите стойности. */

$firstVar = 19;
$secondVar = 7;

echo "Before exchange:", PHP_EOL;
echo "A = $firstVar", PHP_EOL;
echo "B = $secondVar", PHP_EOL;

//First method:
$firstVar ^= $secondVar;
$secondVar ^= $firstVar;
$firstVar ^= $secondVar;

/* Second method
$firstVar = $firstVar + $secondVar;
$secondVar = $firstVar - $secondVar;
$firstVar = $firstVar - $secondVar; */

/* Third method
$tmp = $firstVar;
$firstVar = $secondVar;
$secondVar = $tmp; */

echo "After exchange:", PHP_EOL;
echo "A = $firstVar", PHP_EOL;
echo "B = $secondVar", PHP_EOL;