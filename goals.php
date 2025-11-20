<!doctype html>
<html lang='en'>
	<head>
		<title>Goals</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='Mapping out some of my goals for the foreseeable future'>
		<link rel='stylesheet' href='style.css'>
		<style>
			body {
				background-color: seashell;
			}

			h1 {
				color: mediumslateblue;
			}

			h2 {
				color: darkslateblue;
			}

		   li {
				font-size:18px;
				line-height: 2em;
			}

			a {
				color: darkslateblue;
				}

			a:hover {
				background-color: cornflowerblue;
			}

			li::marker {
				color: darkslateblue;
			}
		</style>
	</head>
	<body>
		
		<?php include('header.php') ?>
		
		<?php
			$short_Term_Goals = ["Get to understand basic design concepts", "Be able to recreate most of the things I see online", "Have a good grasp on algorithmic thinking", "Build a personal website", "Be in a position to create simple apps"];

			$longer_Term_Goals = ["Have a good grasp on both frontend and backend and find my niche", "Better networking", "Land a job"];
		?>

			<main>

				<h1 class='loud-voice'>Goals</h1>
				<h2 class='attention-voice'>End of course goals</h2>

				<ul>

					<?php foreach ($short_Term_Goals as $sh_Goal) { ?>
						<li> <?=$sh_Goal?> </li>
					<?php } ?>

				</ul>

				<h2 class='attention-voice'>5 years in goals</h2>

				<ul>

					<?php foreach ($longer_Term_Goals as $l_Goal) { ?>
						<li> <?=$l_Goal?> </li>
					<?php } ?>

				</ul>

			</main>
	</body>
</html>