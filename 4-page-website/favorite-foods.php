<!doctype html>
 <html lang='en'>

	<head>

		<title>Favorite stuff</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='A list of favorite foods'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/projects/images/meta-6.png'>
		<link rel='stylesheet' href='../style.css'>
		<style>
			body {
				background-color: mistyrose;
			}

			h1 {
				color: #7f1786;
			}

			h2 {
				color: #7f1786;
			}

			p {
				color: darkmagenta;
			}

			a {
				color: darkmagenta;
			}

			li {
				color: darkmagenta;
			}

			a:hover {
				background-color: orchid;
			}

			li::marker {
				color: darkmagenta;
			}
		</style>
		
	</head>
	
	<body>

		<?php include('../header.php') ?>

		<main>

			<div class ='column'>
				
				<h1 class='loud-voice'>Favorite foods</h1>
				<p class='calm-voice'>Some of my favorite foods include:</p>
				
				<ul>
					<li>Mousakas</li>
					<li>Strapatsada</li>
					<li>Tripe soup</li>
				</ul>

				<h2 class='attention-voice'>Introductory links</h2>

				<div class='links'>
					<ul>
						<li><a href='welcome.php'>welcome</a></li>
						<li><a href='contact.php'>contact</a></li>
						<li><a href='journal.php'>journal</a></li>
					</ul>
				</div>
				
			</div>
		</main>

   </body>

</html>