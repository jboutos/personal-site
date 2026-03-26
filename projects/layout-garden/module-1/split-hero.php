<?php
$cards = [
   ['container' => 'half one', 'pictureContainer' => 'picture', 'infoContainer' => 'info', 'headingClass' => 'attention-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => '', 'imageSource' => '//peprojects.dev/images/landscape.jpg',
   'headingContent' => 'Heading level 2', 'paragraphContent' => 'Example paragraph goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'linkContent' => 'Click here',
   ],
   ['container' => 'half two', 'pictureContainer' => 'picture', 'infoContainer' => 'info', 'headingClass' => 'attention-voice', 
   'paragraphClass' => 'calm-voice', 'linkClass' => '', 'imageSource' => '//peprojects.dev/images/landscape.jpg', 'headingContent' => 'Heading level 2', 
   'paragraphContent' => 'Example paragraph goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'linkContent' => 'Click here',
   ],
];
?>

<split-hero class='wrapper'>
	<inner-column>
		<section>
			<?php foreach ($cards as $card):
         	extract($card); include('components/card.php');
         endforeach; ?>
		</section>
	</inner-column>
</split-hero>