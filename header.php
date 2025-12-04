<style>
	@media(max-width: 385px) {
		nav {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			row-gap: 0.3em;
		}

		a {
			justify-self: start;
		}
	}
</style>


<?php include('config.php'); ?>

<header>

	<div class='column'>

		<nav>
			<a href='<?=BASE_URL?>'>home</a>
			<a href='<?=BASE_URL?>?page=welcome'>about</a>
			<a href='<?=BASE_URL?>?page=contact'>contact</a>
			<a href='<?=BASE_URL?>?page=projects'>projects</a>
		</nav>
		
	</div>

</header>