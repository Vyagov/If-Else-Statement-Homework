<?php
/* �� �� ������ �� ����������� �� ������ 3 ����� A, � � � (���� �� �� �
������� �������) �� ���������.
�� �� ������ ��������� ��������� �� ���� ���� C � ����� A � B. */

require_once 'readline.php';

echo "Enter 3 numbers - integer or floating point:", PHP_EOL;

$numA = readline('A = ');
$numB = readline('B = ');
$numC = readline('C = ');

if ($numC > $numA && $numC < $numB) {
	echo "$numC is between $numA and $numB.";
} else if ($numC < $numA && $numC > $numB) {
	echo "$numC is between $numB and $numA.";;
} else {
	echo "$numC isn't between $numA and $numB.";
}

