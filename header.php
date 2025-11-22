<style>
	@media(max-width: 385px) {
		nav {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
		}
	}
</style>


<?php include('config.php'); ?>

<header>

	<div class='column'>

		<nav>
			<a href='<?=BASE_URL?>'>home</a>
			<a href='<?=BASE_URL?>4-page-website/welcome.php'>about</a>
			<a href='<?=BASE_URL?>4-page-website/contact.php'>contact</a>
			<a href='<?=BASE_URL?>projects/index.php'>projects</a>
		</nav>
		
	</div>

</header>