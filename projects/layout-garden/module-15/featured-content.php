<?php
$panels = [
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
?>

<featured-content class='wrapper'>
	<inner-column>
		<div class='container-2'>
			<?php foreach ($panels as $panel):
				extract($panel); include 'components/card.php'; 
			endforeach; ?>
		</div>
		<div class='container'>
			<div class='info-3'>
				<h3 class='subtle-voice'>Heading level 3</h3>
				<p class='calm-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href='#' class='button'>Learn More</a>
			</div>
			<div class='info-4'>
				<h3 class='subtle-voice'>Heading level 3</h3>
				<p class='calm-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href='#' class='button'>Learn More</a>
			</div>
		</div>
	</inner-column>
</featured-content>