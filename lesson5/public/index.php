<?php

include "../config/main.php";

$url_array = preg_split("/\/|\?/", $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else if ($url_array[1] == 'picture') {
    $page = 'picture';
} else {
	$page = '404';
}

if ($_POST['load'] && $_FILES['myimg']) {
   upload_file_to_gallery();
} 
 
$params = prepareVariables($page);

_log($page);
_log($params, 'params');

echo render($page, $params);



