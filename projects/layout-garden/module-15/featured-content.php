<?php
$cards = [
   ['container' => 'card-1', 'pictureContainer' => 'picture', 'infoContainer' => 'info-1', 'headingClass' => 'subtle-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => 'button', 'imageSource' => '//peprojects.dev/images/landscape.jpg',
   'headingContent' => 'Heading level 3', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.', 'linkContent' => 'Learn More',
   ],
   ['container' => 'card-2', 'pictureContainer' => 'picture', 'infoContainer' => 'info-2', 'headingClass' => 'subtle-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => 'button', 'imageSource' => '//peprojects.dev/images/landscape.jpg', 'headingContent' => 'Heading level3', 
   'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 
   'linkContent' => 'Learn More',
   ]
];

$cards2 = [
   ['container' => 'info-3', 'pictureContainer' => '', 'infoContainer' => '', 'headingClass' => 'subtle-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => 'button', 'imageSource' => '',
   'headingContent' => 'Heading level 3', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.', 'linkContent' => 'Learn More',
   ],
   ['container' => 'info-4', 'pictureContainer' => '', 'infoContainer' => '', 'headingClass' => 'subtle-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => 'button', 'imageSource' => '', 'headingContent' => 'Heading level3', 
   'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 
   'linkContent' => 'Learn More',
   ]
];
?>

<featured-content class='wrapper'>
	<inner-column>
		<div class='container-2'>
			<?php foreach ($cards as $card):
				extract($card); include('components/card.php'); 
			endforeach; ?>
		</div>
		<div class='container'>
			<?php foreach ($cards2 as $card):
				extract($card); include('components/card.php'); 
			endforeach; ?>
		</div>
	</inner-column>
</featured-content>