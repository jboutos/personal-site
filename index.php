<!doctype html>

<?php

	$page = $_GET['page'] ?? 'home';

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

	if (isset($pages[$page])) {
	    $template = $pages[$page];
	} else {
	    http_response_code(404);
	    $template = '404.php';
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
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:600|Merriweather+Sans:300" rel="stylesheet">

		
	</head>

	<body class='dark'>

		<header>

			<?php include('header.php') ?>

		</header>

		<main>

			<?php include $template; ?>

			<svg class='circle' width="800px" height="800px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M24 36C30.6274 36 36 30.6274 36 24C36 17.3725 30.6274 12 24 12C17.3726 12 12 17.3725 12 24C12 30.6274 17.3726 36 24 36Z"/>
			</svg>

		</main>

	</body>

</html>