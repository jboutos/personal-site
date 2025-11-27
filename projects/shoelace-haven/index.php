<!doctype html>

<?php 
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}
?>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Shoelace Haven</title>
		<meta name='description' content='Further php testing'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/projects/shoelace-haven/images/logo.png'>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
	</head>
	<body>
		<inner-column>
			<header>
				<?php include('logo.php'); ?>
				<?php include('site-menu.php'); ?>
			</header>
			<main>
			<?php 
				if ($page == 'home') {
					include('home.php');
				}
				if ($page == 'list') {
					include('list.php');
				}
				if ($page == 'details') {
					include('details.php');
				}
			?>
			</main>
			<footer>
				<?php include('footer.php') ?>
			</footer>
		</inner-column>
	</body>
</html>