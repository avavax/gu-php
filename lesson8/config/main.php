<?php
session_start();
//session_destroy();
define('SITE_TITLE', 'Brand');

define("TEMPLATES_DIR", "../templates/");
define("ENGINE_DIR", "../engine/");
define("LAYOUTS_DIR", "/layouts/");
define("SALT", "fg53f4h3g4fd3fhh5");

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'gu_brand');

include_once ENGINE_DIR . 'controller.php';
include_once ENGINE_DIR . 'db.php';
include_once ENGINE_DIR . 'render.php';
include_once ENGINE_DIR . 'catalog.php';
include_once ENGINE_DIR . 'minicart.php';
include_once ENGINE_DIR . 'order.php';
include_once ENGINE_DIR . 'auth.php';

//$_SESSION['user'] = true;
//$_SESSION['user_name'] = 'admin';
