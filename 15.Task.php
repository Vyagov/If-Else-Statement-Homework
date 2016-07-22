<?php
/* �� �� ������� ��������, ����� ������� ���������� ����� �� ���������
[0..24].
�������� �� ������ ������������� ��������� ��������� ���������
���.
��������� ��:
-[18..4] - ����� �����;
-[4..9] - ����� ����;
-[9..18] - ����� ���. */

require_once 'readline.php';

echo 'Enter integer number for hour from the interval [0..24]', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid hour!', PHP_EOL;
	}
	
	$valid = false;
	$hour = readline('Hour = ');
} while ($hour < 0 || $hour > 24);

if ($hour >= 18 || $hour < 4) {
	echo 'Good evening!';
} else if ($hour >= 4 && $hour < 9) {
	echo 'Good morning!';
} else if ($hour >= 9 && $hour < 18) {
	echo 'Good day!';
}

