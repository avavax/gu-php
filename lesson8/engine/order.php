<?php 

function makeOrder() {

	$db = getDb();
	$products = $_COOKIE['products'];
	$status = 1;
	$date = date('Y-m-d H:i:s '); 	
	
	if (isset($_SESSION['user_name'])) {

		// Заказ для зарегистрированного юзера

		$name = 'from reg user';
		$phone = 'from reg user';
		$user_id = $_SESSION['user_name'];

	} else {

		// Гостевой заказ

	    if (!isset($_POST['name']) || $_POST['name'] == "") {
	    	return 'Enter You name. Field cannot be empty.';
	    }
	    if (!isset($_POST['phone']) || $_POST['phone'] == "") {
	    	return 'Enter You phone. Field cannot be empty.';
	    }
	 	if (!$_COOKIE['products']) {
			return 'Make shopping! You cart is empty.';
		}
		
	    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
	    $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
	    $user_id = 0;

	}

	$sql = "INSERT INTO `orders` ( `name`, `phone`, `date`, `products`, `status`, `user_id` ) VALUES ('{$name}', '{$phone}', '{$date}', '{$products}', {$status}, '{$user_id}');";

	if (executeQuery($sql)) {
		$message = 'Thank you for shopping! Our manager call you.';
		setcookie('products', $products, time() - 3600, '/');
	} else {
		$message = 'Sorry, database error';
	}

	return $message;

}

function getOrderList() {

    $login = $_SESSION['user_name'];
    $sql = "SELECT * FROM `orders` WHERE `user_id`='{$login}'";
    $money = 0;
    if ($user = getAssocResult($sql)) {
    	$result = '<p>You orders</p><br>';
    	$result .= '<table border=1px"><tr><th>Date</th><th>Good</th><th>Img</th><th>Quant</th><th>Price</th><th>Status</th></tr>';
    	foreach($user as $key => $value) {

    		$products = explode('/', $value['products']);
    		$products = array_count_values($products);
    		foreach ($products as $prod_key => $prod_value) {
    			
    			$sql = "SELECT * FROM `goods` WHERE `id_product`={$prod_key}";
    			$product_item = getAssocResult($sql);

    			$result .= "<tr><td>".$value['date']."</td>";
    			$result .= "<td>".$product_item[0]['product_name']."</td>";
    			$result .= "<td><img src='/".$product_item[0]['img']."' style='width: 100px;'></td>";
    			$result .= "<td>$prod_value</td>";
    			$result .= "<td>".$product_item[0]['price']."</td>";

    			$status = $value['status'];

    			switch ($status) {
    			 	case '1':
    			 		$result .= "<td>В обработке</td>";
    			 		break;
    			 	case '2':
    			 		$result .= "<td>Доставляется</td>";
    			 		break;
    			 	case '3':
    			 		$result .= "<td>Доставлен</td>";
    			 		break;    			 		    			 	
    			 	default:
    			 		$result .= "<td>qqq</td>";
    			 		break;
    			 } 
				$result .= "</tr>";
    			$money += $product_item[0]['price'];
    		}
     	}
    	$result .= '</table><br><br>';
    	$result .= "Total: $money";

    } else {
    	$result = "You have no orders";
    }

    return $result;
}