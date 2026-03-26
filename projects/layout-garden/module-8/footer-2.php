<?php

$links = [
   ['container' => 'socials', 'headingClass' => 'wise-voice', 
   'linkClass' => '', 'headingContent' => 'Follow us', 'links' => ['TikTok', 'Instagram', 'Youtube', 'Facebook', 'Linkedin']
   ],
   ['container' => 'contact', 'headingClass' => 'wise-voice', 
   'linkClass' => '', 'headingContent' => 'Contact', 'links' => ['Find us', 'Contact Us', 'Work for us']
   ]
];

?>

<footer-2 class='wrapper'>
	<inner-column>
		<div class='hyper-container'>
			<div class='brand'>
				<h2 class='attention-voice'>Heading level 2</h2>
				<p class='calm-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</p>
				<picture>
					<img src='//peprojects.dev/images/square.jpg'>
				</picture>
			</div>
			<div class='container'>
				<?php foreach($links as $link):
					extract($link); include('components/info-links.php');
				endforeach; ?>
			</div>
			<div class='policies'>
				<a class='legal' href='#'>Data protection policy</a>
				<p class='hidden'>-</p>
				<a class='legal' href='#'>Cookies policy</a>
			</div>
			<div class='copyright'>
				<h4 class='miniscule-voice'>2016-2025 © Something<br>Developed by someone</h4>
			</div>
		</div>
	</inner-column>
</footer-2>