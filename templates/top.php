<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	<title><?php out($page_title); if (empty($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/bootstrap.css">	
</head>
<body style="margin: 10px auto 10px" style="background-color: light-gray">

<div class="container">
	<div class="py-5 text-center">
		<h1 class="display-1 py-3"><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></h1>
		<h2 class="dispaly-2"><?php out($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny ... <?php } ?></h1>
		<p class="">
			<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
		</p>
	</div>
</div>

<div class="content">