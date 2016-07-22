<?php
/* Да се състави програма, която да отгатне колко е студено/топло по
въведената температура t в градус Целзий.
Температурните интервали са:
-под -20 ледено студено;
-между 0 и -20 - студено;
-между 15 и 0 - хладно;
-между 25 и 15 - топло;
-над 25 – горещо.
Входни данни: цяло число от интервала [-100..100]. */

require_once 'readline.php';

echo 'Enter temperature t integer number from the interval [-100..100]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid temperature!', PHP_EOL;
	}
	
	$valid = false;
	$t = readline('t = ');
} while ($t < -100 || $t > 100);

if ($t <= -20) {
	echo 'ice coldly';
} else if ($t <= 0 && $t > -20) {
	echo 'coldly';
} else if ($t <= 15 && $t > 0) {
	echo 'chilly';
} else if ($t <= 25 && $t > 15) {
	echo 'warmly';
} else if ($t > 25) {
	echo 'hot';
}