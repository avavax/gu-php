<?php
	$a = 1;
	$b = 3;

	$a += $b;
	$b = $a - $b;
	$a = $a - $b;

	var_dump($a, $b);

?>