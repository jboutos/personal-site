<!doctype html>
<?php

	$page = $_GET['page'] ?? 'home';

?>
<html>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content=''>
		<title>Figma to code challenge</title>
		<meta property='og:image' content=''>
		<link rel='stylesheet' href='css/style.css'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	</head>
	<body>
		<section>
			<nav>
				<ul class='navigation'>
					<li><a href='?page=home'>Template 1</a></li>
					<li><a href='?page=template-2'>Template 2</a></li>
					<li><a href='?page=template-3'>Template 3</a></li>
				</ul>
			</nav>
		</section>

		<?php 
			if ($page == 'home') {
				include('pages/page-1.php');
			} else if ($page == 'template-2') {
				include('pages/page-2.php');
			} else if ($page == 'template-3') {
				include('pages/page-3.php');
			} 
		?>
	</body>
</html>