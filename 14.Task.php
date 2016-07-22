<?php
/* Да се състави програма, която по въведени координати на 2 позиции
от шахматната дъска извежда отговор дали са оцветени в еднакъв или
различен цвят.
Шахматната дъска е квадратна.
Въвеждат се две двойки числа от интервала [1..8]. */

require_once 'readline.php';

echo 'Enter coordinates of two positions in the interval[1..8]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid coordinates!', PHP_EOL;
	}
	
	$valid = false;
	$x = readline('x = ');
	$y = readline('y = ');
	$x1 = readline('x1 = ');
	$y1 = readline('y1 = ');
} while ($x < 1 || $y < 1 || $x1 < 1 || $y1 < 1 ||
		$x > 8 || $y > 8 || $x1 > 8 || $y1 > 8);

if (($x + $y) % 2 == 0 && ($x1 + $y1) % 2 == 0) {
	echo "The positions are the same color.";
} else {
	echo "The positions are with a different color.";
}