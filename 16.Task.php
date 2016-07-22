<?php
/* Въведено е трицифрено естествено число от вида abc.
Трябва да се провери дали:
-ако a=b=c - Изход: цифрите са равни;
-ако a>b>c - Изход: цифрите са във възходящ ред;
-ако a<b<c - Изход: цифрите са в низходящ ред;
и изход: цифрите са ненаредени, за неописаните случаи.
Да се състави програма, която извежда резултата от проверката за
наредба на цифрите в числото. */

require_once 'readline.php';

echo 'Enter three-digit integer number:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}
	
	$valid = false;
	$abc = readline();
} while ($abc < 100 || $abc > 999);

$a = ($abc / 100) % 10;
$b = ($abc / 10) % 10;
$c = $abc % 10;

if ($a == $b && $b == $c) {
	echo 'The digits are equal.';
} else if ($a > $b && $b > $c) {
	echo 'The digits are in increasing order.';
} else if ($a < $b && $b < $c) {
	echo 'The digits are in decreasing order.';
} else {
	echo 'The digits are not arranged, for the described case.';
}
