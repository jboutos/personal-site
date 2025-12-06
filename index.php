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
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Mulish:300" rel="stylesheet">
		
	</head>

	<body class='dark'>

		<header>

			<?php include('header.php') ?>

		</header>

		<main>

			<?php 

				$found = false;

			    if ($page == 'home') {
			        include('home.php');
			        $found = true;
			    }
			    if ($page == 'goals') {
			        include('goals.php');
			        $found = true;
			    }
			    if ($page == 'welcome') {
			        include('4-page-website/welcome.php');
			        $found = true;
			    }
			    if ($page == 'contact') {
			        include('4-page-website/contact.php');
			        $found = true;
			    }
			    if ($page == 'favorite-foods') {
			        include('4-page-website/favorite-foods.php');
			        $found = true;
			    }
			    if ($page == 'journal') {
			        include('4-page-website/journal.php');
			        $found = true;
			    }
			    if ($page == 'projects') {
			        include('projects/projects.php');
			        $found = true;
			    }
			    if ($page == 'project-details') {
			        include('projects/project-details.php');
			        $found = true;
			    }
			    if ($page == 'archive') {
			        include('projects/archive/archive.php');
			        $found = true;
			    }
			    if ($page == 'homepage') {
			        include('projects/archive/homepage.php');
			        $found = true;
			    }

			    if (!$found) {
			        include('404.php');
			    }

			?>

		</main>

	</body>

</html>