<?php

$links = [
   ['container' => 'links', 'headingClass' => '', 'linkClass' => '', 'headingContent' => '', 'links' => ['Malts Club T&Cs', 'Promotional T&Cs', 'Terms of Sale', 'Contact us']
   ]
];

$links2 = [
   ['container' => 'links-2', 'headingClass' => '', 'linkClass' => '', 'headingContent' => '', 'links' => ['Condition Of Use', 'Diageo Privacy Centre', 'UGC Policy', 'Accessibility', 'Privacy Settings', 'Privacy and Cookie Notice', 'Drinkaware', 'DrinkIQ', 'theBar.com'],
   'sneakyElementContent' => '© Diageo 2025'
   ]
];

$links3 = [
   ['linkClass' => '', 'links' => ['Our Brands', 'Shop', 'Visit Distillery', 'Gifts', 'Inspiration', 'Loyalty Program', 'Support']
   ]
];

$payments = [
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => '']
];

$socials = [
	['image' => '//peprojects.dev/images/square.jpg', 'container' => ''],
	['image' => '//peprojects.dev/images/square.jpg', 'container' => '']
];

?>
<footer-4 class='wrapper'>
	<inner-column>
		<div class='container-2'>
			<div class='logo'>
				<picture>
					<a href='#'><img src='//peprojects.dev/images/square.jpg'></a>
				</picture>
			</div>
			<div class='links-3'>
				<a href='#'>Our Brands</a>
				<hr>
				<a href='#'>Shop</a>
				<hr>
				<a href='#'>Visit Distillery</a>
				<hr>
				<a href='#'>Gifts</a>
				<hr>
				<a href='#'>Inspiration</a>
				<hr>
				<a href='#'>Loyalty Program</a>
				<hr>
				<a href='#'>Support</a>
				<hr>
			</div>
		</div>

		<hr class='header-hr'>

		<div class='links'>
			<?php foreach($links as $link):
				extract($link); include('components/info-links.php');
			endforeach; ?>
		</div>
		<div class='container-3'>
			<div class='payment-p'>
				<p>Accepted payment methods</p>
			</div>
			<div class='container'>
				<div class='payment'>
					<?php foreach($payments as $payment):
						extract($payment); include('components/plain-image-component.php');
					endforeach; ?>
				</div>
				<div class='socials'>
					<?php foreach($socials as $social):
						extract($social); include('components/square-image.php');
					endforeach; ?>
				</div>
			</div>
		</div>
		<div class='links-2'>
			<?php foreach($links2 as $link):
				extract($link); include('components/info-links.php');
			endforeach; ?>
		</div>
		<div class='last-p'>
			<p>Please do not share with anyone under the legal purchase age for alcohol. Drink Responsibly.</p>
		</div>
	</inner-column>
</footer-4>