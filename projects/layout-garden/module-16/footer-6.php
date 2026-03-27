<?php
$panels = [
   ['container' => 'info left', 'headingClass' => 'wise-voice', 
   'linkClass' => '', 'headingContent' => 'Heading level 4', 'links' => ['Content', 'Content', 'Content', 'Content', 'Content'], 'sneakyElementContent' => ''
   ],
   ['container' => 'info right', 'headingClass' => 'wise-voice', 
   'linkClass' => '', 'headingContent' => 'Heading level 4', 'links' => ['Content', 'Content', 'Content'], 'sneakyElementContent' => ''
   ],
   ['container' => 'info left', 'headingClass' => 'wise-voice', 'linkClass' => '',
   'headingContent' => 'Heading level 4', 'links' => ['Content', 'Content', 'Content', 'Content'], 'sneakyElementContent' => ''
   ],
   ['container' => 'info right', 'headingClass' => 'wise-voice', 'linkClass' => '',
   'headingContent' => 'Heading level 4', 'links' => ['Content', 'Content', 'Content', 'Content', 'Content'], 'sneakyElementContent' => ''
   ]
];

$socials = [
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => '']
];
?>

<footer-6 class='wrapper'>
	<inner-column>
		<div class='mega-container-1'>
			<?php foreach ($panels as $panel):
				extract($panel); include('components/info-links.php');
			endforeach; ?>
		</div>
		<hr class='hidden'>
		<div class='mega-container-2'>
			<h2 class='subtle-voice'>NEWSLETTER</h2>
			<p>Short paragraph about offers, products and services</p>
			<div class='input'>
				<input class='input-1' type="email" id="email" name="email" placeholder="Enter your email">
				<button type='submit' class='input-2' value="SUBSCRIBE">SUBSCRIBE</button>
			</div>
			<a href='#'><h5 class='miniscule-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h5></a>
			<h2 class='subtle-voice social-heading'>SOCIAL MEDIA</h2>
			<div class='social'>
				<?php foreach($socials as $social):
					extract($social); include('components/square-image.php');
				endforeach; ?>
			</div>
			<hr>
			<p>for phone orders</p>
			<p>phone number</p>
		</div>
	</inner-column>
</footer-6>