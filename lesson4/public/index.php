<?php

include "../config/main.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}


$params = [];
switch ($page) {
    case 'index':
        if ($_POST['load'] && $_FILES['myimg']) {
           upload_file_to_gallery();
        }        
        $params = create_img_array();
        break;
    /*case 'catalog':

       // var_dump($_FILES);
        if ($_POST['load']) {
           // echo "Загружаем файл";
            header("Location: ?page=catalog");
        }
        break;
    case 'api_catalog':
        $params = ["catalog" => [
            "Спички",
            "Кружка",
            "Ведро"
        ]
        ];

        echo json_encode($params, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
        die();*/
}

echo render($page, $params);





