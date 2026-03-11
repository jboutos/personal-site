<style>
	.header {
		display: flex;
		align-items: center;
		justify-content: space-between;

		margin-top: 2em;
		padding-bottom: 0.1em;
		border-bottom: 1px solid black;

		@media(max-width: 450px) {
			display: flex;
			flex-direction: column;
			align-items: start;
			gap: 0.5em;
		}
	}

	header-container a {
		text-decoration: none;
	}

	.subtle-voice {
		margin: 0;
	}

	@media(max-width: 450px) {
		.subtle-voice, a {
			text-align: start;
		}
	}

	nav {
		display: flex;
		gap: 0.7em;
		flex-wrap: wrap;
	}
</style>


<?php include('config.php'); ?>

<header-container>

	<div class='column header'>

		<a class='logo' href='<?=BASE_URL?>'>
			<h2 class='subtle-voice'>J.BOUTOS</h2>
		</a>

		<nav class='navigation'>
			<a href='<?=BASE_URL?>'>home</a>
			<a href='<?=BASE_URL?>?page=welcome'>about</a>
			<a href='<?=BASE_URL?>?page=contact'>contact</a>
			<a href='<?=BASE_URL?>?page=projects'>projects</a>
		</nav>
		
	</div>

</header-container>