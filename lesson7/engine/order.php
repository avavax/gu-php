<?php 

function makeOrder() {
 
    if (!isset($_POST['name']) || $_POST['name'] == "") {
    	return 'Enter You name. Field cannot be empty.';
    }
    if (!isset($_POST['phone']) || $_POST['phone'] == "") {
    	return 'Enter You phone. Field cannot be empty.';
    }
 	if (!$_COOKIE['products']) {
		return 'Make shopping! You cart is empty.';
	}

    $db = getDb();
	$products = $_COOKIE['products'];
    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
    $status = 1;
    $date = date('Y-m-d H:i:s '); 

	$sql = "INSERT INTO `orders` ( `name`, `phone`, `date`, `products`, `status`) VALUES ('{$name}', '{$phone}', '{$date}', '{$products}', {$status});";
	if (executeQuery($sql)) {
		$message = 'Thank you for shopping! Our manager call you.';
		setcookie('products', $products, time() - 3600, '/');
	} else {
		$message = 'Sorry, database error';
	}

	return $message;
}

