<?php
/* Да се състави програма, която получва от конзола 2 естествени
двуцифрени числа a,b.
Програмата да изведе съобщение дали последната цифра от
произведението на двете числа е четна, както и самата цифра.
Входни данни: a,b - естествени числа от интервала [10..99]. */

require_once 'readline.php';

echo 'Enter 2 integer numbers from interval [10 .. 99]:', PHP_EOL;

$a = readline('a = ');
$b = readline('b = ');

while ($a < 10 || $a > 99 || $b < 10 || $b > 99) {
	echo 'Enter a valid input data!', PHP_EOL;
	$a = readline('a = ');
	$b = readline('b = ');
}

$product = $a * $b;

$lastDigit = $product % 10;

echo "$product, $lastDigit ";
echo $lastDigit % 2 == 0 ? 'even.' : 'odd.';
