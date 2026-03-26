<?php

$cards = [
   ['container' => 'stories', 'pictureContainer' => '', 'infoContainer' => 'info-1', 
   'paragraphClass' => 'calm-voice', 'imageSource' => '//peprojects.dev/images/square.jpg', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.', 'linkContent' => 'Learn More',
   ],
   ['container' => 'stories', 'pictureContainer' => '', 'infoContainer' => 'info-1',
   'paragraphClass' => 'calm-voice', 'imageSource' => '//peprojects.dev/images/square.jpg', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.', 'linkContent' => 'Learn More',
   ],
   ['container' => 'stories', 'pictureContainer' => '', 'infoContainer' => 'info-1',
   'paragraphClass' => 'calm-voice', 'imageSource' => '//peprojects.dev/images/square.jpg', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.', 'linkContent' => 'Learn More',
   ],
   ['container' => 'stories', 'pictureContainer' => '', 'infoContainer' => 'info-2',
   'paragraphClass' => 'calm-voice', 'imageSource' => '//peprojects.dev/images/square.jpg', 'paragraphContent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'linkContent' => 'Learn More',
   ]
];

?>

<success-stories-list class='wrapper'>
	<inner-column>
		<h2 class='attention-voice'>Success Stories</h2>
		<div class='container'>
			<?php foreach($cards as $card):
				extract($card); include('components/testimonial.php');
			endforeach; ?>
		</div>
		<a href='#' class='more-stories'>Read more success stories</a>
	</inner-column>
</success-stories-list>