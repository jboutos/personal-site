<?php
$cards = [
   ['container' => 'info-pic', 'pictureContainer' => 'picture', 'infoContainer' => 'info',
   'paragraphClass' => 'calm-voice', 'linkClass' => 'clamp-voice', 'imageSource' => '//peprojects.dev/images/square.jpg',
   'paragraphContent' => 'The future of mowing is here', 'linkContent' => 'Shop Robotic Lawn Mowers', 'headingContent' => ''
   ],
   ['container' => 'info-pic', 'pictureContainer' => 'picture', 'infoContainer' => 'info',
   'paragraphClass' => 'calm-voice', 'linkClass' => 'clamp-voice', 'imageSource' => '//peprojects.dev/images/square.jpg',
   'paragraphContent' => 'Chainsaws for every challenge', 'linkContent' => 'Shop Legendary Chainsaws', 'headingContent' => ''
   ],
   ['container' => 'info-pic', 'pictureContainer' => 'picture', 'infoContainer' => 'info', 'headingClass' => 'subtle-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => 'clamp-voice', 'imageSource' => '//peprojects.dev/images/square.jpg',
   'paragraphContent' => 'Designed to be easy to use', 'linkContent' => 'Shop MAX Battery Series', 'headingContent' => '']
];

?>

<feature-tiles class='wrapper'>
	<inner-column>

		<?php foreach($cards as $card):
			extract($card); include('components/card.php');
		endforeach; ?>
	</inner-column>
</feature-tiles>