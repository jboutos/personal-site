<style>
	.header {
		@media(max-width: 450px) {
			display: flex;
			flex-direction: column;
		}
		display: flex;
		align-items: center;
		justify-content: space-between;

		margin-top: 2em;
		border-bottom: 1px solid black;
	}

	header a {
		text-decoration: none;
	}

	.subtle-voice {
		margin: 0;
	}
</style>


<?php include('config.php'); ?>

<header>

	<div class='column header'>

		<a class='logo' href='<?=BASE_URL?>'>
			<h2 class='subtle-voice'>J.BOUTOS</h2>
		</a>

		<nav>
			<a href='<?=BASE_URL?>'>home</a>
			<a href='<?=BASE_URL?>?page=welcome'>about</a>
			<a href='<?=BASE_URL?>?page=contact'>contact</a>
			<a href='<?=BASE_URL?>?page=projects'>projects</a>
		</nav>
		
	</div>

</header>