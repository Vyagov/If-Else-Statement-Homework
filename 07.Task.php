<?php
/* Въведете 3 променливи от конзолата – час, сума пари, дали съм здрав
	– число със стойност да или не.
Съставете програма, която взема решения на базата на тези данни по
следния начин:
	- ако съм болен няма да излизам
	- ако имам пари ще си купя лекарства
	- ако нямам – ще стоя вкъщи и ще пия чай
	- ако съм здрав ще изляза на кино с приятели
	- ако имам по-малко от 10 лв ще отида на кафе 
Покажете резултата на конзолата.*/

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
