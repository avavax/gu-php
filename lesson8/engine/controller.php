<?php
session_start();
$_SESSION['counter'] = 1;

function prepareVariables($page, $action, $id)
{
    $params = [];
    $params['is_ajax'] = false;
    switch ($page) {

        case 'index':
            if (!isset($_SESSION)) startInit();
            break;

        case 'single':
            break;

        case 'catalog':
            break;

        case 'cart':
            if (isset($_POST) && $_POST['order'] == "exist") {
               $params['order_msg'] = makeOrder();
            }
            break;

        case 'checkout':
            if ($action == 'logout') {
                logOut();
            }
            if (isset($_POST['user_register'])) {
                $params['message_register'] = registerNewUser();
            }
            if (isset($_POST['user_login'])) {
                $params['message_login'] = logIn();
            }            
            $params['user'] = getUserStatus();
            if ($params['user'] != 'admin' && $params['user'] != 'guest') {
               $params['orders'] = getOrderList(); 
            }
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






