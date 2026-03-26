<?php 

	$cards = [
		["headingContent" => "Heading level 4", "container" => "container", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => ''
		],
		["headingContent" => "Another Heading", "container" => "container", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => ''
		],
		["headingContent" => "Third Card", "container" => "container", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => ''
		],
		["headingContent" => "Fourth Card", "container" => "container", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => ''
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
				$imageSource = $card['imageSource'];
				$title = $card['headingContent'];
				$text = $card['paragraphContent'];
				$infoLink = $card['infoLink'];
				$headingClass = $card['headingClass'];
				$paragraphClass = $card['paragraphClass'];
				$container = $card['container'];
				$infoContainer = '';
				$pictureContainer = '';
				$linkContent = '';


				include('components/card.php');

				if ($index < count($cards) - 1) {
					echo "<hr class='hidden-3'>";
				}
			} ?>
			<a class='hidden' href='#'>View All</a>
		</div>
	</inner-column>
</card-list>