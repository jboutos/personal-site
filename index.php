<!doctype html>

<?php

	$page = $_GET['page'] ?? 'home';

?>

<html lang='en'>

	<head>

		<title>Index</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='An amalgamation of everything unholy created at PE so far'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/images/metadata-share-image.png'>
		<link rel='stylesheet' href='style.css'>
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
		
	</head>

	<body class='dark'>

		<header>

			<?php include('header.php') ?>

		</header>

		<main>

			<?php 

				$pages = [
				    'home' => 'home.php',
				    'goals' => 'goals.php',
				    'welcome' => '4-page-website/welcome.php',
				    'contact' => '4-page-website/contact.php',
				    'favorite-foods' => '4-page-website/favorite-foods.php',
				    'journal' => '4-page-website/journal.php',
				    'projects' => 'projects/projects.php',
				    'project-details' => 'projects/project-details.php',
				    'archive' => 'projects/archive/archive.php',
				    'homepage' => 'projects/archive/homepage.php',
				];

				if (!isset($pages[$page])) {
				    http_response_code(404);
				}

				if (http_response_code() === 404) {
				    include '404.php';
				} else {
				    include $pages[$page];
				}


			?>

		</main>

	</body>

</html>