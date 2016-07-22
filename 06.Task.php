<?php
/* Въведете 3 числа от конзолата - а1, а2 и а3. Разменете стойностите им
така, че а1 да има стойността на а2, а2 да има стойността на а3, а а3
да има старата стойност на а1. */

require_once 'readline.php';

echo 'Enter 3 numbers: ', PHP_EOL;
$a1 = readline('a1 = ');
$a2 = readline('a2 = ');
$a3 = readline('a3 = ');

//Firts method:
$tmp1 = $a1;
$tmp2 = $a2;
$tmp3 = $a3;

$a1 = $tmp2;
$a2 = $tmp3;
$a3 = $tmp1;

/*Second method:
$a1 ^= $a2;
$a2 ^= $a1;
$a1 ^= $a2;
$a2 ^= $a3;
$a3 ^= $a2;
$a2 ^= $a3; */

echo "After exchange:", PHP_EOL;
echo "a1 = $a1", PHP_EOL;
echo "a2 = $a2", PHP_EOL;
echo "a3 = $a3", PHP_EOL;