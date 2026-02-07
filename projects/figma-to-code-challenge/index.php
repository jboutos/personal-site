<!doctype html>
<?php

	$page = $_GET['page'] ?? 'home';

	function load_json($path) {
		if (!file_exists($path)) return [];
		return json_decode(file_get_contents($path), true);
	}

	$pageData = load_json("data/pages/$page.json");

?>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='Rendering templates through json and some styles!'>
		<title>Figma to code challenge</title>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/projects/shoelace-haven/images/figma.png'>
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
					<li><a href='?page=about'>Template 2</a></li>
					<li><a href='?page=contact'>Template 3</a></li>
				</ul>
			</nav>
		</section>

		<?php
			foreach ($pageData['sections'] as $section):

				$template = 'sections/' . $section['id'] . '.php';

				$data = [];
				if (!empty($section['source'])) {
					$data = load_json('data/' . $section['source']);
				}

				include($template);


			endforeach;
		?>
		
	</body>
</html>