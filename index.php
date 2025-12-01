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

		<title>Index</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='An amalgamation of everything unholy created at PE so far'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/images/metadata-share-image.png'>
		<link rel='stylesheet' href='style.css'>
		
	</head>

	<body>

		<?php include('header.php') ?>

		<?php 

			if ($page == 'home') {
				include('home.php');
			}
			if ($page == 'goals') {
				include('goals.php');
			}
			if ($page == 'welcome') {
				include('4-page-website/welcome.php');
			}
			if ($page == 'contact') {
				include('4-page-website/contact.php');
			}
			if ($page == 'projects') {
				include('projects/projects.php');
			}
			if ($page == 'favorite-foods') {
				include('4-page-website/favorite-foods.php');
			}
			if ($page == 'journal') {
				include('4-page-website/journal.php');
			}
			if ($page == 'archive') {
				include('projects/archive/archive.php');
			}
			if ($page == 'homepage') {
				include('projects/homepage.php');
			}

		?>

	</body>

</html>