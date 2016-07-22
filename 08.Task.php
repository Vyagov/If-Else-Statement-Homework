<?php
/* �� �� ������� ��������, ����� �������� �� ��������� 4-������o
���������� ����� �� ��������� [1000.. 9999]. �� ���� ����� ��
�������� 2 ���� 2-������� �����. ������� ����� �� ������� �� 1-��
� 4-�� ����� �� ���������� �����. ������� ����� �� ������� �� 2-�a -
3-�� ����� �� ���������� �����. ���� �������� �� �� ������ ���� 1-��
���� ����� e ��-����� <, ����� = ��� ��-������ �� 2-�� �����. */

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
