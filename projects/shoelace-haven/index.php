<!doctype html>

<?php 
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	function getTemplate($page) {
		include($page . '.php');
	}
?>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Shoelace Haven</title>
		<meta name='description' content='Further php testing'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/projects/shoelace-haven/images/slice2.png'>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
	</head>
	<body>

		<header>
			<?php include('logo.php'); ?>
			<?php include('site-menu.php'); ?>
		</header>

		<main>
			<?php getTemplate($page); ?>
		</main>

		<footer>
			<?php include('footer.php') ?>
		</footer>

	</body>
</html>