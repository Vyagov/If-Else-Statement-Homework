<?php
/* �������� 3 ���������� �� ��������� � ���, ���� ����, ���� ��� �����
	� ����� ��� �������� �� ��� ��.
��������� ��������, ����� ����� ������� �� ������ �� ���� ����� ��
������� �����:
	- ��� ��� ����� ���� �� �������
	- ��� ���� ���� �� �� ���� ���������
	- ��� ����� � �� ���� ����� � �� ��� ���
	- ��� ��� ����� �� ������ �� ���� � ��������
	- ��� ���� ��-����� �� 10 �� �� ����� �� ���� 
�������� ��������� �� ���������.*/

require_once 'readline.php';

$time = readline('Time: ');
$cash = readline('Cash: ');
$healthy = readline('Healthy - yes or no: ');

if ($healthy == 'yes') {
	echo 'I am healthy and I will go';
	echo $cash >= 10 ? 'to the cinema with friends.' : 'to coffee.';
}

if ($healthy == 'no') {
	echo 'I am sick and I will ';
	echo $cash > 0 ? 'buy medications.' : 'stay at home and drink tea.';
}
