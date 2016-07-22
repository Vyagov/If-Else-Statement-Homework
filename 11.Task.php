<?php
/* Съставете програма, която по дадено трицифренo число проверява
дали числото се дели на всяка своя цифра. Във въведеното число да
няма цифра 0. */

require_once 'readline.php';

echo 'Enter three-digit integer number, without 0 in it:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}
	
	$valid = false;
	$input = readline();
	$firstDigit = ($input / 100) % 10;
	$secondDigit = ($input / 10) % 10;
	$thirdDigit = $input % 10;
} while ($input < 100 || $input > 999 || $firstDigit == 0 || $secondDigit == 0 || $thirdDigit == 0);

if ($input % $firstDigit == 0) {
	echo "$input is divisible by $firstDigit.", PHP_EOL;
} else {
	echo "$input is not divisible by $firstDigit.", PHP_EOL;
}

if ($input % $secondDigit == 0) {
	echo "$input is divisible by $secondDigit.", PHP_EOL;
} else {
	echo "$input is not divisible by $secondDigit.", PHP_EOL;
}

if ($input % $thirdDigit == 0) {
	echo "$input is divisible by $thirdDigit.", PHP_EOL;
} else {
	echo "$input is not divisible by $thirdDigit.", PHP_EOL;
}


