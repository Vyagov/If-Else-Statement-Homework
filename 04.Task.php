<?php
/* Въведете 2 различни числа от конзолата и ги разпечатайте в
нарастващ ред. */

require_once 'readline.php';

echo 'Enter 2 different numbers', PHP_EOL;

$firstNum = readline('A = ');
$secondNum = readline('B = ');

echo 'The numbers in ascending order: ';
echo $firstNum < $secondNum ? "$firstNum, $secondNum" : "$secondNum, $firstNum";
