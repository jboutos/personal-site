<!doctype html>

<html lang='en'>

	<head>

		<title>Resume</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='My resume'>
		<link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/resume.css">

	</head>

	<body>

		<?php

			require('functions.php');

			$resume = getJsonData('resumedata');

			$qualifications = $resume['qualifications'];
			$experiences = $resume['experience'];
			$languages = $resume['languages'];
			$hobbies = $resume['hobbies'];
			$education = $resume['education'];
			
		?>

		<resume>
			<inner-column>
				<section>
					<left-panel>

						<picture class='profile'>
							<img src='images/prof-pic2.jpg'>
						</picture>

						<qualifications>
							<h3>CORE QUALIFICATIONS</h3>

							<ul>

							<?php foreach ($qualifications as $quality) { ?>
								<li><?=$quality?></li>
							<?php } ?>

							</ul>
							
						</qualifications>

						<hr>

						<education>
							<h3>EDUCATION</h3>
							<?php foreach ($education as $edu) { ?>
								<p class='calm-voice'><?=$edu['school']?>
								<br><?=$edu['years']?></p>
							<?php } ?>
						</education>

					</left-panel>

					<right-panel>

						<personal-info>

							<h1>IOANNIS BOUTOS</h1>

							<div class='contact'>
								<picture>
									<img src='images/phone.png'>
								</picture>
								<p>+306942930998</p>
							</div>

							<div class='contact'>
								<picture>
									<img src='images/email.png'>
								</picture>
								<p>jgbout89@gmail.com</p>
							</div>

							<div class='contact'>
								<picture>
									<img src='images/place.png'>
								</picture>
								<p>Olympou 47-49, Chalandri, Athens, Greece</p>
							</div>

						</personal-info>

						<?php
						$sections = ['WORK EXPERIENCE' => $experiences,'LANGUAGES' => $languages,'HOBBIES' => $hobbies,];
						?>

						<experience>
						    <?php foreach ($sections as $title => $skills) { ?>
						        <?php require 'modules/experience.php'; ?>
						    <?php } ?>
						</experience>

					</right-panel>
				</section>
			</inner-column>
		<resume>

	</body>
</html>