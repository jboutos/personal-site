<!doctype html>

<?php

	require('functions.php');
	require('controllers/home.php');
	require('controllers/projects.php');
	require('controllers/favorite-foods.php');
	require('controllers/project-details.php');
	require('controllers/goals.php');
	require('controllers/welcome.php');
	require('controllers/contact.php');
	require('controllers/journal.php');
	require('controllers/archive.php');
	require('controllers/homepage.php');
	require('controllers/error404.php');

	$page = $_GET['page'] ?? 'home';

?>

<html lang='en'>

	<head>

		<title>Index</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='An amalgamation of everything unholy created at PE so far'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/images/metadata-share-image.png'>
		<link rel='stylesheet' href='css/style.css'>
		<?= getCSS($page); ?>
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:600|Merriweather+Sans:300" rel="stylesheet">
		
	</head>

	<body class='dark <?= $page ?>'>

		<header>

			<?php include('header.php') ?>

		</header>

		<main>

			<?php

				if ($page === 'home') {
				    echo homePage();
				} elseif ($page === 'projects') {
					echo projectsPage();
				} elseif ($page === 'favorite-foods') {
					echo favoriteFoodsPage();
				} elseif ($page === 'project-details') {
					echo detailsPage();
				} elseif ($page === 'goals') {
					echo goalsPage();
				} elseif ($page === 'welcome') {
					echo welcomePage();
				} elseif ($page === 'contact') {
					echo contactPage();
				} elseif ($page === 'journal') {
					echo journalPage();
				} elseif ($page === 'archive') {
					echo archivePage();
				} elseif ($page === 'homepage') {
					echo homepagePage();
				} else {
					echo error404Page();
				}

			?>

			<svg class='circle' width="800px" height="800px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M24 36C30.6274 36 36 30.6274 36 24C36 17.3725 30.6274 12 24 12C17.3726 12 12 17.3725 12 24C12 30.6274 17.3726 36 24 36Z"/>
			</svg>

		</main>

	</body>

</html>