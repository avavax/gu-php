<?php

define('TMPLPATH', 'tmpl/');

function renderTemplate($page, $data = '') {
	ob_start();
	include TMPLPATH . $page . '.php';
	$content = ob_get_clean();
	$content = str_replace("{{DATA}}", $data, $content);
	return $content;
}

echo renderTemplate('layout');