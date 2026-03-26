<?php 

	$cards = [
		["headingContent" => "Content", "container" => "info", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoClass" => 'info', "headingClass" => 'subtle-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => 'container', "pictureContainer" => ''
		],
		["headingContent" => "Content", "container" => "info", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoClass" => 'info', "headingClass" => 'subtle-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => 'container', "pictureContainer" => ''
		],
		["headingContent" => "Content", "container" => "info", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoClass" => 'info', "headingClass" => 'subtle-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => 'container', "pictureContainer" => ''
		],
		["headingContent" => "Content", "container" => "info", "paragraphContent" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
		"imageSource" => "//peprojects.dev/images/landscape.jpg", "infoClass" => 'info', "headingClass" => 'subtle-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => 'container', "pictureContainer" => ''
		]
	];

?>

<info-cards class='wrapper'>
	<inner-column>
		<div class='mega-container'>
			<?php foreach ($cards as $card):
				extract($card); include('components/card.php');
			endforeach; ?>
		</div>
	</inner-column>
</info-cards>