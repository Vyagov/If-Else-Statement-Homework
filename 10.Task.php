<?php
/* ������ �� �� ������� �������� � ����. ����� 2 ���� � ���������� 2 �
3 ����� � �� �������� ������������.
�� �� ������� ��������, ����� �� ����� ���� ������� ��� �� ��������
��������� � ���� ����, �.�. ��-����� ���� �� �� ����� ����� �� ������.
������ �����: ���������� ����� �� ��������� [10..9999]. */

require_once 'readline.php';

echo 'Enter the capaciti of the cistern from interval [10 .. 9999]:', PHP_EOL;

$capacity = readline('Capacity = ', PHP_EOL);

while ($capacity < 10 || $capacity > 9999) {
	echo 'Enter the correct capacity:', PHP_EOL;
	$capacity = readline('Capacity = ', PHP_EOL);
}

$pail1 = 2;
$pail2 = 3;

$times = floor($capacity / ($pail1 + $pail2));
$remainder = $capacity % ($pail1 + $pail2);

echo "$times times pail of 2 liters,", PHP_EOL;
echo "$times times pail of 3 liters";

switch ($remainder) {
	case 1:
		echo ',', PHP_EOL;
		echo 'remain 1 liter to fill.', PHP_EOL;
		break;
	case 2:
		echo ',', PHP_EOL;
		echo '+ 1 additional pail of 2 liters.', PHP_EOL;
		break;
	case 3:
		echo ',', PHP_EOL;
		echo "+ 1 additional pail of 3 liters.", PHP_EOL;
		break;
	case 4:
		echo ',', PHP_EOL;
		echo "+ 2 additional pails of 2 liters.", PHP_EOL;
		break;
	default: 
		echo '.';
		break;
}
