<?php
/* �������� � ���������� ���������� ����� �� ���� abc.
������ �� �� ������� ����:
-��� a=b=c - �����: ������� �� �����;
-��� a>b>c - �����: ������� �� ��� �������� ���;
-��� a<b<c - �����: ������� �� � �������� ���;
� �����: ������� �� ����������, �� ����������� ������.
�� �� ������� ��������, ����� ������� ��������� �� ���������� ��
������� �� ������� � �������. */

require_once 'readline.php';

echo 'Enter three-digit integer number:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}
	
	$valid = false;
	$abc = readline();
} while ($abc < 100 || $abc > 999);

$a = ($abc / 100) % 10;
$b = ($abc / 10) % 10;
$c = $abc % 10;

if ($a == $b && $b == $c) {
	echo 'The digits are equal.';
} else if ($a > $b && $b > $c) {
	echo 'The digits are in increasing order.';
} else if ($a < $b && $b < $c) {
	echo 'The digits are in decreasing order.';
} else {
	echo 'The digits are not arranged, for the described case.';
}
