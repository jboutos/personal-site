<?php 

	$cards = [
		["headingContent" => "Learn", "container" => "container", "paragraphContent" => "This is the website we wish we had when we were learning on our own.",
		"imageSource" => "//peprojects.dev/images/square.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => '', 'linkContent' => ''
		],
		["headingContent" => "Build", "container" => "container", "paragraphContent" => "Learn from a curriculum with the best curated online tutorials, blogs, and courses.",
		"imageSource" => "//peprojects.dev/images/square.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => '', 'linkContent' => ''
		],
		["headingContent" => "Connect", "container" => "container", "paragraphContent" => "Build dozens of portfolio-worthy projects along the way, from simple scripts to full programs and deployed websites.",
		"imageSource" => "//peprojects.dev/images/square.jpg", "infoLink" => '', "headingClass" => 'wise-voice', "paragraphClass" => 'calm-voice',
		"infoContainer" => '', "pictureContainer" => '', 'linkContent' => ''
		]
	];

?>

<feature-overview class='wrapper'>
	<inner-column>
		<h2 class='attention-voice'>How it works</h2>
		<p class=calm-voice>This is the website we wish we had when we were learning on our own. We scour the internet looking for only the best resources to supplement your learning and present them in a logical order.</p>
		<div class='mega-container'>
			<?php foreach ($cards as $card):
				extract($card); include('components/card.php');
			endforeach; ?>
		</div>
	</inner-column>
</feature-overview>