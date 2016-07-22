<?php
/* ��������� ������ �� ������ ������ ������ �� 4 � ����������
����������, �� ��� �������� ������ �� 400, �.�. 1900 �� � ���������,
�� 1600 � 2000 �� ���������.
��������� ��������, ����� �� ������ ���, �����, ������ ���������
���������� ����. */

require_once 'readline.php';

echo 'Enter day, month, year:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid day, month and year!', PHP_EOL;
	}
	
	$valid = false;
	$day = readline();
	$month = readline();
	$year = readline();
} while ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 0);

if (($year % 4 == 0 || $year % 400 == 0) && $month == 2 && $day == 29) {
	$day = 1;
	$month++;
} else if (($year % 4 != 0 || $year % 400 != 0) && $month == 2 && $day == 28) {
	$day = 1;
	$month++;
} else if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 30) {
	$day = 1;
	$month++;
} else if ($month == 12 && $day == 31) {
	$day = 1;
	$month = 1;
	$year++;
} else if ($day == 31) {
	$day = 1;
	$month++;
} else {
	$day++;
}
echo "The next date is $day-$month-$year.";

