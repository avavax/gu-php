<?php
	$title = "Главная страница - страница обо мне";
	$h1 = "Информация обо мне";
	$year = date('Y');

	$content = file_get_contents("template.tmpl");

	$content = str_replace("{{YEAR}}", $year, $content);
	$content = str_replace("{{H1}}", $h1, $content);
	$content = str_replace("{{TITLE}}", $title, $content);

	echo($content);
?>

