<?php
$panels = [
   ['container' => 'card', 'pictureContainer' => '', 'infoContainer' => 'info', 'headingClass' => 'clamp-voice-2', 
   'paragraphClass' => 'calm-voice', 'linkClass' => '', 'imageSource' => '//peprojects.dev/images/landscape.jpg',
   'headingContent' => 'Level 1', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 
   'linkContent' => 'Read More',
   ]
];
?>

<stat-highlight class='wrapper'>
	<inner-column>
		<?php foreach ($panels as $panel):
			extract($panel); include('components/card.php');
		endforeach; ?>
	</inner-column>
</stat-highlight>