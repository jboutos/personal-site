
<style>
	
	body {
		--color: hsl(296 70.7% 30.8%);
		--base: hsl(7 75.8% 93.5%);
		--hover: hsl(302 58.9% 64.7%);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(7 75.8% 93.5%);
			--base: hsl(296 70.7% 30.8%);
			--hover: hsl(302 58.9% 64.7%);
		}
	}

	body {
		background-color: var(--base);
	}

	h1, h2, p, a, li, li::marker {
		color: var(--color);
	}

	a:hover {
		background-color: var(--hover);
	}

	.careful-voice {
		padding: 0;
	}

	ul {
		margin-bottom: 2em;
	}

	.links {
		display: block;
		margin-top: 1em;
	}

	li {
		list-style-type: none;
	}



</style>

<?php

	$journal = json_decode(file_get_contents('journal.json'), true);

?>

<main>

	<div class ='column'>

		<h1 class='attention-voice'>A rather short journal on my web-dev endeavours</h1>


		<ul>
		<?php foreach ($journal as $entry) { ?>
		  <li>
			  <h1 class=careful-voice><?= $entry['date'] ?></h1>
			  <p class='calm-voice'><?= $entry['observations'] ?></p>
		  </li>
		<?php } ?>
		</ul>

		<h2 class='careful-voice'>Introductory links</h2>

		<?php include('footer.php') ?>

	</div>
	
</main>