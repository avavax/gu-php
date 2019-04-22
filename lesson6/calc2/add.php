<?php

    $operand1 = (int)$_POST['operand1'];
    $operand2 = (int)$_POST['operand2'];
    $operation = $_POST['operation'];

	switch ($operation) {
		case '+':
			$result = $operand1 + $operand2;
			break;
		case '-':
			$result = $operand1 - $operand2;
			break;
		case '*':
			$result = $operand1 * $operand2;
			break;
		case '/':
			$result = ($operand2 != 0) ? $operand1 / $operand2 : 'Infinite';
			break;								
		default:
			$result = 'error';
			break;
	}
	
	$str = "{$operand1} {$operation} {$operand2} = {$result} \n";
	
	$file = fopen("data.txt", 'a+');
	fputs($file, $str);
	fclose($file);
	
	
	$response['result'] = $result;
	echo json_encode($response);