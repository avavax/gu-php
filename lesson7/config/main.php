<?php
define('SITE_TITLE', 'Урок 5');

define("TEMPLATES_DIR", "../templates/");
define("ENGINE_DIR", "../engine/");
define("LAYOUTS_DIR", "/layouts/");

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