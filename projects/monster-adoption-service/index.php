<html lang = 'en'>
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

			@media (min-width: 1150px) {
				display: grid;
				grid-template-columns: repeat(4, 1fr);
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
			border-radius: 2em;
		}

		monster-card {
			display: flex;
			flex-direction: column;

			padding: 1em;

			background-color: #eadeb8;
			border-radius: 2em;
			max-width: 270px;

			@media (min-width: 530px) {
				max-width: 300px;
			}
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
			padding: 0.6em;
			background-color: #bcccce;
			border-radius: 1em;
		}

		a {
			align-self: start;
			text-decoration: none;
			color: black;
		}

	</style>

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
			echo "<main>";
			echo "<h1> Monster Adoption Service</h1>";
			echo "<h2>Didn't you ever wonder what it would be like to have a little monster in your family?</h2>";

			echo "<p> Ready to add a little bit of spook-tacular love to your life? Here at the Monster adoption service, 
						we specialize in matching extraordinary humans with the world's most adorably fuzzy, surprisingly 
						friendly, and sometimes a little mischievous monsters. Forget the fright—these unique companions 
						only want snuggles, treats, and a forever home where their true, charming selves can shine! 
						Get ready to meet your next best friend!</p>";

			echo "<h3>Take a look below at some of our adorable monsters up for adoption!</h3>";
			echo "</main>";

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
						   "<h2 class='name'>" . $name . "</h2>" .
							"<p class='story'>" . $story . "</p>" .
							"<p class='story2'>" . $story2 . "</p>" .
							"<a href='#'><p class='status'>" . $status . "</p></a>" .
						"</monster-card>";

					echo "</li>";
			}
			echo "</ol>";
		echo "</inner-column>";
	?>
</html>