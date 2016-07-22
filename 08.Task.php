<?php
/* Да се състави програма, която получава от конзолата 4-цифренo
естествено число от интервала [1000.. 9999]. От това число се
формират 2 нови 2-цифрени числа. Първото число се формира от 1-та
и 4-та цифра на въведеното число. Второто число се формира от 2-рa -
3-та цифра на въведеното число. Като резултат да се изведе дали 1-то
ново число e по-малко <, равно = или по-голямо от 2-то число. */

require_once 'readline.php';

echo "Enter 4-digit integer number from interval [1000 .. 9999]:", PHP_EOL;

$input = readline('N = ');

while ($input < 1000 || $input > 9999) {
	echo 'The number N is not the interval!', PHP_EOL;
	$input = readline('N = ', PHP_EOL);
}

$firstDigit = ($input / 1000) % 10;
$secondDigit = ($input / 100) % 10;
$thirdDigit = ($input / 10) % 10;
$fourthDigit = $input % 10;

$num1 = $firstDigit . $fourthDigit;
$num2 = $secondDigit . $thirdDigit;

echo 'The first new number is ';

if ($num1 < $num2) {
	echo "less then the second ($num1<$num2).";
} else if ($num1 > $num2) {
	echo "greater then the second ($num1>$num2).";
} else {
	echo "equal to the second ($num1=$num2).";
}
