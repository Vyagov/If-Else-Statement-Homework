<?php
/* Въведете 2 различни целочислени числа от конзолата. Запишете
тяхната сума, разлика, произведение, остатък от деление и
целочислено деление в отделни променливи и разпечатайте тези
резултати. */

require_once 'readline.php';

echo "Enter 2 different integer numbers:", PHP_EOL;

$firstNum = readline('A = ');
$secondNum = readline('B = ');

$sum = $firstNum + $secondNum;
echo "Sum = $sum", PHP_EOL;

$diff = abs($firstNum - $secondNum);
echo 'Difference = ' . $diff, PHP_EOL;

$product = $firstNum * $secondNum;
echo "Product = $product", PHP_EOL;

if ($firstNum > $secondNum) {
	$rem = $firstNum % $secondNum;
	echo "Remainder = $rem", PHP_EOL;
	
	$div = $firstNum / $secondNum;
	echo "Division = $div", PHP_EOL;
} else {
	$rem = $secondNum % $firstNum;
	echo "Remainder = $rem", PHP_EOL;
	
	$div = $secondNum / $firstNum;
	echo "Division = $div", PHP_EOL;
}
