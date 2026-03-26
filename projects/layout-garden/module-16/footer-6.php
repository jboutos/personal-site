<?php
$panels = [
   ['container' => 'info left', 'headingClass' => 'subtle-voice', 
   'linkClass' => '', 'headingContent' => 'Heading level 3', 'links' => ['Content', 'Content', 'Content', 'Content', 'Content']
   ],
   ['container' => 'info right', 'headingClass' => 'subtle-voice', 
   'linkClass' => '', 'headingContent' => 'Heading level3', 'links' => ['Content', 'Content', 'Content']
   ],
   ['container' => 'info left', 'headingClass' => 'subtle-voice', 'linkClass' => '',
   'headingContent' => 'Heading level 3', 'links' => ['Content', 'Content', 'Content', 'Content']
   ],
   ['container' => 'info right', 'headingClass' => 'subtle-voice', 'linkClass' => '',
   'headingContent' => 'Heading level 3', 'links' => ['Content', 'Content', 'Content', 'Content', 'Content']
   ]
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
			<h2 class='attention-voice'>NEWSLETTER</h2>
			<p>Short paragraph about offers, products and services</p>
			<div class='input'>
				<input class='input-1' type="email" id="email" name="email" placeholder="Enter your email">
				<button type='submit' class='input-2' value="SUBSCRIBE">SUBSCRIBE</button>
			</div>
			<a href='#'><h5 class='miniscule-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h5></a>
			<h2 class='attention-voice social-heading'>SOCIAL MEDIA</h2>
			<div class='social'>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
			</div>
			<hr>
			<p>for phone orders</p>
			<p>phone number</p>
		</div>
	</inner-column>
</footer-6>