<head>

	<title><?= $meta['title'] ?></title>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='description' content='<?= $meta['description'] ?>'>
	<meta property='og:image' content='<?= $meta['image'] ?>'>
	<link rel='stylesheet' href='css/style.css'>
	<?= getCSS($_GET['page'] ?? 'home'); ?>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:600|Merriweather+Sans:300" rel="stylesheet">
		
</head>