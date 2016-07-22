<?php
/* �� �� ������� ��������, ����� ������� �� ������� 2 ����������
���������� ����� a,b.
���������� �� ������ ��������� ���� ���������� ����� ��
�������������� �� ����� ����� � �����, ����� � ������ �����.
������ �����: a,b - ���������� ����� �� ��������� [10..99]. */

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
