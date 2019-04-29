<?php 

function getAllProductsFromDb($from = 0, $onPage = 9) {
    $db = getDb();
	$sql = "SELECT * FROM goods LIMIT {$from}, {$onPage}";
    $result = getAssocResult($sql);
    return $result;
}

function getProductFromDb($id = '1001') {
    $db = getDb();
	$sql = "SELECT * FROM goods WHERE id_product={$id}";
    $result = getAssocResult($sql);
    return $result[0];
    /*if ($result) {
    	return $result[0];
    } else {
    	return 'Database error';
    }*/
}