<head>

	<link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento" rel="stylesheet">

	<style>
		section {
			display: grid;
			grid-template-columns: 1fr;

			@media (min-width: 570px) {
				grid-template-columns: 0.25fr 1fr;
				gap: 2em;
			}
		}

		h1, h3 {
			font-family: 'Oswald', sans-serif;
		}

		p, li {
			font-family: 'Quattrocento', serif;
		}

		picture {
			display: block;
		}

		img {
			display: block;
			width: 100%;
		}

		.profile img {
			width: 150px;
		}

		.contact img {
			width: 20px;
		}

		left-panel {
			display: block;
			background-color: hsl(189 69.7% 70.1%);

			padding: 1em;



			@media (min-width: 570px) {
				height: 100vh;
			}
		}

		.contact {
			@media (min-width: 570px) {
				display: flex;
				align-items: center;
				gap: 0.7em;
			}
		}

		work-experience {
			display: block;
			margin-top: 2em;
		}

		qualifications {
			display: block;

			margin-top: 2em;
		}

		ul li {
			margin-top: 0.6em;
			max-width: 60ch;
		}


	</style>
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

						echo "<ul>";

						foreach ($qualifications as $quality) {
							echo "<li>" . $quality . "</li>";
						}

						echo "</ul>";
						
						?>
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
							<p>gjbout89@gmail.com</p>
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

								echo "<ul>";

								foreach ($experiences as $experience) {
									echo "<li>" . $experience . "</li>";
								}

								echo "</ul>";
						
							?>
							
						</work-experience>

						<languages>
							<h3>LANGUAGES</h3>

							<?php

								$languages = ["English - Excellent knowledge (Cambridge Proficiency)", "French - Proficient (C1)", "Greek - Native"];

								echo "<ul>";

								foreach ($languages as $language) {
									echo "<li>" . $language . "</li>";
								}

								echo "</ul>";
						
							?>
							
						</languages>

						<hobbies>
							<h3>HOBBIES</h3>

							<?php

								$hobbies = ["Volunteering at a shelter for stray animals", "Surfing, snowboarding"];

								echo "<ul>";

								foreach ($hobbies as $hobby) {
									echo "<li>" . $hobby . "</li>";
								}

								echo "</ul>";
						
							?>

						</hobbies>

					</experience>

				</right-panel>
			</section>
		</inner-column>
	<resume>

</body>