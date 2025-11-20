<!doctype html>

<html lang='en'>

	<head>

		<title>Index</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='An amalgamation of everything unholy created at PE so far'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/images/metadata-share-image.png'>
		<link rel='stylesheet' href='style.css'>
		<style>

			html {
				--color: #233EA9;
				--link: #4A4A4F;
				--list: slategray;
				--base: lavender;
				--hover: cornflowerblue;
			}

			body {
				background-color: var(--base);
			}
			h1 {
				color: var(--color);
			}

			h2 {
				color: var(--color);
			}

			a {
				color: var(--link);
				&:hover {
					background-color: var(--hover);
				}
			}

			li::marker {
				color: var(--list);
			}

			.info {
				display: flex;
				flex-direction: column;
				align-items: start;
				gap: 10px;
			}

		</style>
		
	</head>

	<body>

		<?php include('header.php') ?>

		<main>

			<div class='column'>

				<h1 class='loud-voice'>My web-dev journey</h1>

				
				
				<div class='info'>
					<ul>
						<li><a href='goals.php'>Goals</a></li>
						<li><a href='resume.php'>Resume</a></li>
						<li><a href='https://substack.com/@mrmusicvibe?utm_source=user-menu'>My substack</a></li>
					</ul>
				</div>

			</div>

		</main>

	</body>

</html>