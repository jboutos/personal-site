<?php
$panels = [
   ['container' => 'info-1', 'headingClass' => 'extra-wise-voice', 
   'linkClass' => '', 'headingContent' => 'ABOUT US', 'links' => ['Media Center', 'A Certain Company<br> Foundation', 'Investors', 'Policies and Practices', 'Careers']
   ],
   ['container' => 'info-2', 'headingClass' => 'extra-wise-voice', 
   'linkClass' => '', 'headingContent' => 'NEED HELP?', 'links' => ['FAQ', 'Contact Us', 'International']
   ],
   ['container' => 'legal', 'headingClass' => '', 'linkClass' => '',
   'headingContent' => '', 'links' => ['Privacy Policy', 'Cookies Policy', 'Cookies Settings', 'Notice at Collection', 'Do Not Sell or Share <br>My Personal Information', 'Terms of Service']
   ]
];

$socials = [
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => '']
];

$socials2 = [
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => '']
];
?>

<footer-5 class='wrapper'>
	<inner-column>
		<div class='logo'>
			<div>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
			</div>
			<div class='button'>
				<a href='#'>
					<picture><?php include('images/map.svg') ?></picture>
					<span>United States | English</span>
				</a>
			</div>
		</div>
		<hr>
		<div class='container'>
			<div class='info'>
				<?php foreach($panels as $panel):
					extract($panel); include('components/info-links.php');
				endforeach; ?>
			</div>
			<div class='socials-2'>
				<?php foreach($socials2 as $social):
					extract($social); include('components/square-image.php');
				endforeach; ?>
			</div>
		</div>
		<hr>
		<div class='socials'>
			<?php foreach($socials as $social):
				extract($social); include('components/square-image.php');
			endforeach; ?>
		</div>
		<div class='footer'>
			<p class='miniscule-voice'>© 2025 Some Company. All rights reserved.</p>
		</div>
	</inner-column>
</footer-5>