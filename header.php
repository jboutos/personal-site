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
			<a href='<?=BASE_URL?>' class='<?php if ($page == "welcome") {echo "purple";} ?>'>home</a>
			<a href='<?=BASE_URL?>?page=welcome' class='<?php if ($page == "welcome") {echo "purple";} ?>'>about</a>
			<a href='<?=BASE_URL?>?page=contact' class='<?php if ($page == "welcome") {echo "purple";} ?>'>contact</a>
			<a href='<?=BASE_URL?>?page=projects' class='<?php if ($page == "welcome") {echo "purple";} ?>'>projects</a>
		</nav>
		
	</div>

</header>