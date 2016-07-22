<?php
// Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ ред.

require_once 'readline.php';

echo "Enter 3 different numbers:", PHP_EOL;

$firstNum = readline('A = ');
$secondNum = readline('B = ');
$thirdNum = readline('C = ');

echo 'The numbers in descending order: ';

if ($firstNum > $secondNum && $firstNum > $thirdNum) {
	echo $secondNum > $thirdNum ? "$firstNum, $secondNum, $thirdNum" : "$firstNum, $thirdNum, $secondNum";	
} else if ($secondNum > $firstNum && $secondNum > $thirdNum) {
	echo $firstNum > $thirdNum ? "$secondNum, $firstNum, $thirdNum" : "$secondNum, $thirdNum, $firstNum";
} else {
	echo $secondNum > $firstNum ? "$thirdNum, $secondNum, $firstNum" : "$thirdNum, $firstNum, $secondNum";		
}
