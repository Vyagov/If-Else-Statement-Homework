<?php
/* �������� 2 �������� ����� �� ��������� � �� ������������ �
��������� ���. */

require_once 'readline.php';

echo 'Enter 2 different numbers', PHP_EOL;

$firstNum = readline('A = ');
$secondNum = readline('B = ');

echo 'The numbers in ascending order: ';
echo $firstNum < $secondNum ? "$firstNum, $secondNum" : "$secondNum, $firstNum";
