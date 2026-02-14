<!doctype html>
<html lang = 'en'>
	<head>
		<style>

			inner-column {
				display: block;
				max-width: 1600px;
				margin-left: auto;
				margin-right: auto;

				padding: 0.5em;
			}

			ol {
				display: flex;
				flex-direction: column;
				list-style-type: none;
				padding: 0;
				gap: 4em;

				@media (min-width: 530px) {
					display: grid;
					grid-template-columns: repeat(2, 1fr);
				}

				@media (min-width: 840px) {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
				}

				@media (min-width: 1150px) {
					display: grid;
					grid-template-columns: repeat(4, 1fr);
					align-items: stretch;
				}
			}

			main {
				display: flex;
				flex-direction: column;

				gap: 1em;

				@media (min-width: 1150px) {
					display: flex;
					flex-direction: column;
					align-items: center;
				}
			}

			.portrait {
				display: block;
				
				width: 200px;   
				aspect-ratio: 1 / 1;

			}

			.portrait img {
				display: block;

				width: 100%;
				height: 100%;
				object-fit: cover; 
				border-radius: var(--radius-3);
			}

			monster-card p {
				max-width: 30ch;
				text-align: start;
			}

			h1, h2, h3, h4 {
				font-family: STSong, sans-serif;
			}

			h3 {
				margin-bottom: 2em;
			}

			p {
				font-family: Helvetica, serif;
				max-width: 80ch;

				@media (min-width: 1150px) {
					text-align: center;
				}
			}

			#one h2 {
				color: #e23837;
			}

			#two h2 {
				color: #3e7325;
			}

			#three h2 {
				color: #3154a9;
			}

			#four h2 {
				color: #c54871;
			}

			#five h2 {
				color: #ae8a35;
			}

			#six h2 {
				color: #ec783d;
			}

			#seven h2 {
				color: #311852;
			}

			.status {
				align-self: start; 
				justify-self: end;  
				text-decoration: none;
				color: black;
				padding: 0.6em;
				background-color: #bcccce;
				border-radius: var(--radius-2);
			}

			monster-catalog {
				display: block;
			}

			.test {
				display: flex;
				align-items: center;
				gap: 2em;
			}

			html {
			  --hue: 0; /* change me! */
			  --radius: 2em;
			  --radius-2: 1em;
			  --radius-3: 1.3em;
			  --font: 3em;
			  --attention: 2em;
			  --subtle: 1.5em;
			  --calm: 1em;
			}

			/* attention subtle calm*/

			.loud-voice {
				font-size: var(--font);
			}

			.attention-voice {
				font-size: var(--attention);
			}

			.subtle-voice {
				font-size: var(--subtle);
			}

			.calm-voice {
				font-size: var(--calm);
			}

			body {
				background-color: hsl(var(--hue), 20%, 50%);
			}

			.test-container {
				display: flex;
				flex-direction: column;
			}

			monster-card {
				display: flex;
				flex-direction: column;

				
				padding: 1em;
				background-color: #eadeb8;
				border-radius: var(--radius);
				max-width: 270px;
				height: 100%;

				@media (min-width: 530px) {
					justify-content: space-between;
					max-width: 300px;
				}
			}

		</style>
	</head>

	<body>

		<?php

			$cody = ["id" => "one", "name" => "Codey", "favorite food" => "mountain dew code red", "age" => 7, "adopted" => true, "portrait" => "images/codey.jpg", "hobby" => "play wow"];
			$lima = ["id" => "two", "name" => "Lima Bean", "favorite food" => "lima beans", "age" => 4, "adopted" => false, "portrait" => "images/limabean.jpg", "hobby" => "go bird-watching"];
			$reads = ["id" => "three", "name" => "Miss reads-a-lot", "favorite food" => "madeline cookies and tea", "age" => 9, "adopted" => false, "portrait" => "images/miss-reads-a-lot.jpg", "hobby" => "read books"];
			$fragoo = ["id" => "four", "name" => "Fragoo", "favorite food" => "strawberries", "age" => 8, "adopted" => false, "portrait" => "images/fragoo.jpg", "hobby" => "walk in nature"];
			$banana = ["id" => "five", "name" => "Mr. Banana", "favorite food" => "bananas", "age" => 7, "adopted" => false, "portrait" => "images/mr-banana.jpg", "hobby" => "wach basketball games"];
			$orangina = ["id" => "six", "name" => "Orangina", "favorite food" => "oranges and fanta", "age" => 6, "adopted" => false, "portrait" => "images/orangina.jpg", "hobby" => "watch shows on the tv"];
			$shadow = ["id" => "seven", "name" => "Shadow", "favorite food" => "eggplants", "age" => 9, "adopted" => false, "portrait" => "images/shadow.jpg", "hobby" => "go fishing"];

			$monsters = [$cody, $lima, $reads, $fragoo, $banana, $orangina, $shadow];

			echo "<inner-column>";
			?>
			<div class='test-container'>
				<div class='test'>
					<p>Adjust the colors!</p>
					<input class='color' type='range' min='0' max='1000' step='10'>
				</div>

				<div class='test'>
					<p>Adjust the border roundness!</p>
					<input class='round' type='range' min='0' max='4'>
				</div>

				<div class='test'>
					<p>Adjust the font sizes!</p>
					<input class='font' type='range' min='1' max='10'>
				</div>
			</div>
			<?php
				echo "<main>";
					echo "<h1 class='loud-voice'> Monster Adoption Service</h1>";
					echo "<h2 class='attention-voice'>Didn't you ever wonder what it would be like to have a little monster in your family?</h2>";

					echo "<p class='calm-voice'> Ready to add a little bit of spook-tacular love to your life? Here at the Monster adoption service, 
								we specialize in matching extraordinary humans with the world's most adorably fuzzy, surprisingly 
								friendly, and sometimes a little mischievous monsters. Forget the fright—these unique companions 
								only want snuggles, treats, and a forever home where their true, charming selves can shine! 
								Get ready to meet your next best friend!</p>";

					echo "<h3 class='subtle-voice'>Take a look below at some of our adorable monsters up for adoption!</h3>";
				echo "</main>";

				echo "<monster-catalog>";
					echo "<ol>";
					foreach ($monsters as $monster) {
						$id = $monster["id"];
						$name = $monster["name"];
						$story = "My favorite food is " . $monster["favorite food"] . " and I am " . $monster["age"] . " years old.";
						$story2 = "On my free time I like to " . $monster["hobby"] . ".";
						$portrait = $monster["portrait"];
						$status = $monster["adopted"];

						if ($status == 1) {
							$status = "Adopted!";
						} else {
							$status = "I need a home!";
						}

						echo "<li class='monster'>";

							echo 
								"<monster-card id='" . $id . "'>" .
									"<picture class='portrait'>" .
										"<img src='" . $portrait . "' width='200'>" .
									"</picture>" .
								   "<h2 class='attention-voice name'>" . $name . "</h2>" .
									"<p class='calm-voice story'>" . $story . " " . $story2 . "</p>" .
									"<a href='#' class='status'>" . $status . "</a>" .
								"</monster-card>";

						echo "</li>";
					}
					echo "</ol>";
				echo "</monster-catalog>";
			echo "</inner-column>";
		?>

		<script src="script.js"></script>
	</body>
</html>