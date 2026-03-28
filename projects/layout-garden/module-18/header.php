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
				<div class=''>
					<a href='#' class='shopping-container'>
						<picture>
							<?php include('images/cart-timer.svg') ?>
						</picture>
						<span class='hidden-2'>My Products</span>
					</a>
				</div>
				<div class=''>
					<a href='#' class='shopping-container'>
						<picture>
							<?php include('images/heart.svg') ?>
						</picture>
						<span class='hidden-2'>Lists</span>
					</a>
				</div>
				<a href='#' class='shopping-container'>
					<picture>
						<?php include('images/user.svg') ?>
					</picture>
					<span class='hidden-2'>Log In</span>
				</a>
				<a class='cart-container' href='#'>
					<picture>
						<?php include('images/cart.svg') ?>
					</picture>
				</a>
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
				<div class='hidden'>
					<a class='lesser-voice' href='#'>Offers</a>
					<a class='lesser-voice' href='#'>Pamphlets</a>
					<a class='lesser-voice' href='#'>Healthy Corner</a>
					<a class='lesser-voice' href='#'>Exclusive</a>
					<a class='lesser-voice' href='#'>Recipes</a>
					<a class='lesser-voice' href='#'>#hashtag</a>
				</div>
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