<?php

if (isset($_POST['operation'])) {
	$operand1 = (isset($_POST['operand1'])) ? $_POST['operand1'] : 0;
	$operand2 = (isset($_POST['operand2'])) ? $_POST['operand2'] : 0;
	$operation = (isset($_POST['operation'])) ? $_POST['operation'] : '+';
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
}

?>

<form method="POST">
	<input type="number" name="operand1" 
		value="<?php if(isset($_POST['operand1'])) echo $_POST['operand1']; ?>">
	<select name="operation">
		<option <?php if(isset($_POST['operation']) && $_POST['operation'] == '+') echo 'selected'; ?>>+</option>
		<option <?php if(isset($_POST['operation']) && $_POST['operation'] == '-') echo 'selected'; ?>>-</option>
		<option <?php if(isset($_POST['operation']) && $_POST['operation'] == '*') echo 'selected'; ?>>*</option>
		<option <?php if(isset($_POST['operation']) && $_POST['operation'] == '/') echo 'selected'; ?>>/</option>
	</select>
	<input type="number" name="operand2"
		value="<?php if(isset($_POST['operand2'])) echo $_POST['operand2'] ?>">
	<input type="submit" value="Calc">
	<input type="text" value="<?php if(isset($result)) echo $result ?>">
</form>

