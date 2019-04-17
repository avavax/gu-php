<?php
//Файл констант
define("TEMLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');
define("GALLERY", 'img/gallery/');


/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'gu_gallery');


include_once "../engine/functions.php";
include_once "../engine/log.php";
include_once "../engine/db.php";