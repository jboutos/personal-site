<?php 

	$cards = [
		[
			"title" => "Heading level 4",
			"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco.",
			"image" => "//peprojects.dev/images/landscape.jpg"
		],
		[
			"title" => "Another Heading",
			"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco.",
			"image" => "//peprojects.dev/images/landscape.jpg"
		],
		[
			"title" => "Third Card",
			"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco.",
			"image" => "//peprojects.dev/images/landscape.jpg"
		],
		[
			"title" => "Fourth Card",
			"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco.",
			"image" => "//peprojects.dev/images/landscape.jpg"
		]
	];

?>

<card-list class='wrapper'>
	<inner-column>
		<div class='link-top'>
			<h2 class='attention-voice'>Heading level 2</h2>
			<a class='hidden-2' href='#'>View All</a>
		</div>
		<div class='mega-container'>
			<?php foreach ($cards as $index => $card) {
				$image = $card['image'];
				$title = $card['title'];
				$text = $card['text'];

				include('components/card-from-card-list.php');

				if ($index < count($cards) - 1) {
					echo "<hr class='hidden-3'>";
				}
			} ?>
			<a class='hidden' href='#'>View All</a>
		</div>
	</inner-column>
</card-list>