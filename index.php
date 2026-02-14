<!doctype html>

<?php

	require('functions.php');

	getController($_GET['page'] ?? 'home');

	$meta = getPageMeta($_GET['page'] ?? 'home');

?>

<html lang='en'>

	<head>

		<title><?= $meta['title'] ?></title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='<?= $meta['description'] ?>'>
		<meta property='og:image' content='<?= $meta['image'] ?>'>
		<link rel='stylesheet' href='css/style.css'>
		<?= getCSS(pageSelect($_GET['page'] ?? 'home')); ?>
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:600|Merriweather+Sans:300" rel="stylesheet">
		
	</head>

	<body class="dark <?= pageSelect($_GET['page'] ?? 'home') ?>">

		<header>

			<?php include('modules/header.php') ?>

		</header>

		<main>

			<?php echoView($_GET['page'] ?? 'home'); ?>

			<svg class='circle' width="800px" height="800px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M24 36C30.6274 36 36 30.6274 36 24C36 17.3725 30.6274 12 24 12C17.3726 12 12 17.3725 12 24C12 30.6274 17.3726 36 24 36Z"/>
			</svg>

			<div id="move"></div>

		</main>
	<script src='js/script.js'></script>
	</body>

</html>