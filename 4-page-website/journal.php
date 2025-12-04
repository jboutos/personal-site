
<style>
	body {
		background-color: mistyrose;
	}

	h1, h2 {
		color: #7f1786;
	}

	p, a, li, li::marker {
		color: darkmagenta;
	}

	a:hover {
		background-color: orchid;
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

	h1 {
		padding-top: 1em;
		padding-bottom: 0.5em;
	}

	h2 {
		padding-bottom: 0;
		margin-top: 2em;
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
			  <h1 class=careful-voice><?= $entry['date'] ?></h2>
			  <p class='calm-voice'><?= $entry['observations'] ?></p>
		  </h1>
		<?php } ?>
		</ul>

		<h2 class='careful-voice'>Introductory links</h2>

		<?php include('footer.php') ?>

	</div>
	
</main>