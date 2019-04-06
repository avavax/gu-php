<?php
// 1. 

$a = 2; 
$b = 1;

if ($a >= 0 && $b >= 0) {
	echo $a - $b;
} else if ($a < 0 && $b < 0) {
	echo $a * $b;
} else {
	echo $a + $b;
};

echo '<br><br>';

// 2.
$num = mt_rand(1, 15);

switch ($num) {
	case '1':
		echo '1 <br>';
	case '2':
		echo '2 <br>';
	case '3':
		echo '3 <br>';
	case '4':
		echo '4 <br>';
	case '5':
		echo '5 <br>';
	case '6':
		echo '6 <br>';
	case '7':
		echo '7 <br>';
	case '8':
		echo '8 <br>';
	case '9':
		echo '9 <br>';
	case '10':
		echo '10 <br>';
	case '11':
		echo '11 <br>';
	case '12':
		echo '12 <br>';
	case '13':
		echo '13 <br>';
	case '14':
		echo '14 <br>';
	case '15':
		echo '15 <br>';											
}

echo '<br><br>';

// 3.

function add($num1, $num2) {
	return $num1 + $num2;
};

function mult($num1, $num2) {
	return $num1 * $num2;
};

function sub($num1, $num2) {
	return $num1 - $num2;
};

function div($num1, $num2) {
	if ($num2 == 0) {
		return 'division by zero';
	} else {
		return $num1 / $num2;		
	};
};

// 4. 
function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case 'add':
			return add($arg1, $arg2);
			break;
		case 'sub':
			return sub($arg1, $arg2);
			break;
		case 'div':
			return div($arg1, $arg2);
			break;
		case 'mult':
			return mult($arg1, $arg2);
			break;									
		default:
			return 'Unknow function';
			break;
	}
}

echo (mathOperation(3, 2, 'div'));

// 6.

function power($val, $pow) {
	if ($pow < 0 || gettype($pow) != 'integer') {
		return 'Uncorrect degree value';
	}
	if ($pow == 0) {
		return 1;
	}
	if ($pow == 1) {
		return $val;
	} else {
		return power($val, $pow - 1) * $val;
	}
}

echo power(3, 0);
echo '<br><br>';

// 7. 

$hours = date('H');
$minutes = date('i');

function stringTime($hours, $minutes) {

	$hourStr = ' часов ';
	$minStr = ' минут';

	if (($hours % 10 == 2 && $hours != 12) || 
		($hours % 10 == 3 && $hours != 13) || 
		($hours % 10 == 4 && $hours !=14)) {
		$hourStr = ' часа ';
	}
	if ($hours % 10 == 1 && $hours != 11) {
		$hourStr = ' час ';
	}

	if (($minutes % 10 == 2 && $minutes != 12) || 
		($minutes % 10 == 3 && $minutes != 13) || 
		($minutes % 10 == 4 && $minutes !=14)) {
		$minStr = ' минуты';
	}	

	if ($minutes % 10 == 1 && $minutes != 11) {
		$minStr = ' минута';
	}

	return $hours.$hourStr.$minutes.$minStr;

}

// проверка 
for ($i = 0; $i < 25; $i++) {
	echo stringTime($i, 0).'<br>';
}

for ($i = 0; $i < 60; $i++) {
	echo stringTime(0, $i).'<br>';
}
