<?php 

	include 'settings.php';

	$title = 'Заголовок страницы';
	$data = $db -> getAll('SELECT * FROM links');
	$tpl = 'my_tpl_links.php';

	include 'main_tpl.php';

