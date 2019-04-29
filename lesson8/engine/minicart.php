<?php

function getMiniCart() {
	if ($_COOKIE['products']) {
		$products = $_COOKIE['products'];
		$products = explode('/', $products);
		$products_output = array_count_values($products);
		$response = [
			"amount" => 0,
			"countGoods" => 0];
		$amount = 0;
		$countGoods =0; 
		$response_contents =[];
		foreach($products_output as $key => $value) {			
			$countGoods += $value;
			$product = getProductFromDb($key);
			array_push($response_contents, 
				["quantity" => $value, 
				"id_product" => $key,
				"product_name" => $product['product_name'],
				"price" => $product['price'],
				"img" => $product['img'],
				"discount" => $product['discount'],
				"filter" => true]);
			$amount += $product['price'] * $value;
		}
	} else {
		return false;
	}
	$response[ "contents" ] = $response_contents;
	$response[ "amount" ] = $amount;
	$response[ "countGoods" ] = $countGoods;
	return $response;
}

function addMiniCart($id) {
	$products = $_COOKIE['products'];
	if($products) {
		$products = $products . '/' . $id;
	} else {
		$products = $id;
	}
	
	setcookie('products', $products, time() + 60 * 60 * 24 * 365, '/');
	$response = [ "result" => 1 ];
	return $response;
}

function delMiniCart($id) {
	$products = $_COOKIE['products'];
	$products = explode('/', $products);
	$products_output = array_count_values($products);
	$products_output[$id] = $products_output[$id] - 1;
	foreach ($products_output as $key => $value) {
		for($i = 0; $i < $value; $i++) {
			$product_result = $product_result . '/' . $key;
		}
	}
	if (substr($product_result, 0, 1) == '/') {
		$product_result = substr($product_result, 1);
	}

	setcookie('products', $product_result, time() + 60 * 60 * 24 * 365, '/');
	$response = [ "result" => 1 ];
	return $response;
}
 