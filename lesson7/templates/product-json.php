<?php
$response = [
	[
		"id_product" => 1001,
		"product_name" => "Mango t-shot",
		"price" => 52,
		"img" => "img/goods/01.jpg",
		"discount" => true
	], 
	[
		"id_product" => 1002,
		"product_name" => "Orange t-shot",
		"price" => 53,
		"img" => "img/goods/02.jpg",
		"discount" => false
	],
	[
		"id_product" => 1003,
		"product_name" => "Green t-shot",
		"price" => 54,
		"img" => "img/goods/03.jpg",
		"discount" => false
	],
	[
		"id_product" => 1004,
		"product_name" => "Blue t-shot",
		"price" => 55,
		"img" => "img/goods/04.jpg",
		"discount" => false
	],
	[
		"id_product" => 1005,
		"product_name" => "Black t-shot",
		"price" => 56,
		"img" => "img/goods/05.jpg",
		"discount" => false
	],
	[
		"id_product" => 1006,
		"product_name" => "Red t-shot",
		"price" => 57,
		"img" => "img/goods/06.jpg",
		"discount" => true
	],
	[
		"id_product" => 1007,
		"product_name" => "Yellow t-shot",
		"price" => 58,
		"img" => "img/goods/07.jpg",
		"discount" => false
	],	
	[
		"id_product" => 1008,
		"product_name" => "Mango t-shot",
		"price" => 59,
		"img" => "img/goods/08.jpg",
		"discount" => false
	],	
	[
		"id_product" => 1009,
		"product_name" => "Mango n-shot",
		"price" => 61,
		"img" => "img/goods/09.jpg",
		"discount" => false
	]								
];

echo json_encode($response);

