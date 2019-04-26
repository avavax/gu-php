<?php
session_start();
$_SESSION['counter'] = 1;

function prepareVariables($page, $action, $id)
{
    $params = [];
    $params['is_ajax'] = false;
    switch ($page) {

        case 'index':
            break;

        case 'single':

            //$params['product'] = getProductFromDb($id);
            break;

        case 'catalog':
            break;

        case 'cart':
            if(isset($_POST) && $_POST['order'] == "exist") {
               $params['order_msg'] = makeOrder();
            }
            break;

        case 'checkout':
            break;

        // Получение товаров из каталога
        case 'product-json':
            $params['is_ajax'] = true;
            $params['data'] = getAllProductsFromDb();
            break;

        // Работа с мини-корзиной 
        case 'minicart':
            $params['is_ajax'] = true;
            $params['data'] = getMiniCart();
            break;

        case 'minicart-add':
            $params['is_ajax'] = true;
            $params['data'] = addMiniCart($id);
            break;

        case 'minicart-del':
            $params['is_ajax'] = true;
            $params['data'] = delMiniCart($id);
            break; 

    }
    return $params;
}






