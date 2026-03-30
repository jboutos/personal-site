<?php

$links = [
	['container' => 'hidden', 'headingContent' => '','linkClass' => 'lesser-voice', 'links' => ['Offers', 'Pamphlets', 'Healthy Corner', 'Exclusive', 'Recipes', '#hashtag']]
];

$links2 = [['container' => '', 'linkClass' => 'shopping-container', 'svgPath' => 'images/cart-timer.svg', 'spanClass' => 'hidden-2', 'spanContent' => 'My Products'],
	['container' => '', 'linkClass' => 'shopping-container', 'svgPath' => 'images/heart.svg', 'spanClass' => 'hidden-2', 'spanContent' => 'Lists'],
	['container' => '', 'linkClass' => 'shopping-container user-svg', 'svgPath' => 'images/user-3.svg', 'spanClass' => 'hidden-2', 'spanContent' => 'Log In'],
	['container' => '', 'linkClass' => 'shopping-container', 'svgPath' => 'images/cart.svg', 'spanClass' => '', 'spanContent' => '']
];

?>

<header-2 class='wrapper'>
	<inner-column>
		<div class='container'>
			<div class='input-container'>
				<picture>
					<img class='logo' src='//peprojects.dev/images/square.jpg'>
				</picture>
				<div class='search'>
					<input class='hidden-input' type="search" id="site-search" name="q" placeholder='Search for items'>
					<button type="submit"><?php include('images/search.svg'); ?></button>
				</div>
			</div>
			<div class='icons'>
				<?php foreach($links2 as $link):
					extract($link); include('components/info-links-with-svg.php');
				endforeach; ?>
			</div>
		</div>
		<div class='container-2'>
			<div class='links'>
				<div class='e-shop hidden'>
					<a href='#' class='e-shop-container'>
						<div class='e-shop-svg-container'>
							<picture>
								<?php include('images/squares.svg'); ?>
							</picture>
							<span class='lesser-voice'>EShop</span>
						</div>
						<div class='chevron-container'>
							<?php include('images/chevron.svg'); ?>
						</div>
					</a>
				</div>
				<?php foreach($links as $link):
					extract($link); include('components/info-links.php');
				endforeach; ?>
			</div>
			<div class='hidden'>
				<a class='lesser-voice' href='#'>Membership</a>
				<a class='lesser-voice' href='#'>Shops</a>
				<a rel='toggle' class='language-container' href='#'>
					<span class='lesser-voice'>GR</span>
					<div class='chevron-container'>
						<?php include('images/chevron.svg'); ?>
					</div>
					<!-- <span class='lesser-voice menu' href='#'>EN</span> -->
				</a>
			</div>
		</div>
		<div class='container-2'>
			<picture class='hidden-3'>
				<?php include('images/hamburger.svg') ?>
			</picture>
			<div class='search-2'>
				<input class='hidden-3' type="search" id="site-search" name="q" placeholder='Search for items'>
				<button type="submit"><?php include('images/search.svg'); ?></button>
			</div>
		</div>
	</inner-column>
</header-2>