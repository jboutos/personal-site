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

		<resume>
			<inner-column>
				<section>
					<left-panel>

						<picture class='profile'>
							<img src='images/prof-pic2.jpg'>
						</picture>

						<qualifications>
							<h3>CORE QUALIFICATIONS</h3>

							<?php

							$qualifications = ["Willingness to learn", "Cooperative", "Focused on goals and targets", "Efficient communicator"];
							?>

							<ul>

							<?php foreach ($qualifications as $quality) { ?>
								<li><?=$quality?></li>
							<?php } ?>

							</ul>
							
						</qualifications>

						<hr>

						<education>
							<h3>EDUCATION</h3>
							<p>University of Piraeus, business administration<br>2007 - 2013</p>
							<p>LFHED | Lycée Franco-Hellénique Eugène Delacroix<br>2001 - 2007</p>
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

						<experience>

							<work-experience>
								<h3>WORK EXPERIENCE</h3>

								<?php

									$experiences = ["Cultivation of olive trees in Macrychori, Larisa<br>2016 - 2024", "Study and engagement with investments in various sectors (stocks, bonds, mutual funds, real estate, cryptocurrencies, etc.)<br>2014 - Today"];
								?>

									<ul>

									<?php foreach ($experiences as $experience) { ?>
										<li><?=$experience?></li>
									<?php } ?>

									</ul>
								
							</work-experience>

							<languages>
								<h3>LANGUAGES</h3>

								<?php

									$languages = ["English - Excellent knowledge (Cambridge Proficiency)", "French - Proficient (C1)", "Greek - Native"];
								?>

									<ul>

									<?php foreach ($languages as $language) { ?>
										<li><?=$language?></li>
									<?php } ?>

									</ul>
								
							</languages>

							<hobbies>
								<h3>HOBBIES</h3>

								<?php

									$hobbies = ["Volunteering at a shelter for stray animals", "Surfing, snowboarding"];
								?>

									<ul>

									<?php foreach ($hobbies as $hobby) { ?>
										<li><?=$hobby?></li>
									<?php } ?>

									</ul>

							</hobbies>

						</experience>

					</right-panel>
				</section>
			</inner-column>
		<resume>

	</body>
</html>