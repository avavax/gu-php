<?php
$response = 
[
    "amount" => 105,
    "countGoods" => 2,
    "contents" => [
        [
            "quantity" => 1,
            "id_product" => 1001,
            "product_name" => "Mango t-shot",
            "price" => 52,
            "img" => "img/goods/01.jpg",
            "discount" => true,
            "filter" => true
        ],
        [
            "quantity" => 1,
            "id_product" => 1002,
            "product_name" => "Orange t-shot",
            "price" => 53,
            "img" => "img/goods/02.jpg",
            "discount" => false,
            "filter" => true
        ]
    ]
];

echo json_encode($response);



