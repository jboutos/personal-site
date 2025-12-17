<style>

	body {
		--color: hsl(248 39% 39.2%);
		--charged : hsl(249 79.8% 67.1%);
		--base: hsl(25 100% 96.7%);
		--hover: hsl(219 79.2% 66.1%);
		--circle: hsl(248 39% 39.2% / 0.4);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(25 100% 96.7%);
			--charged : hsl(249 79.8% 80.1%);
			--base: hsl(248 39% 39.2%);
			--hover: hsl(219 79.2% 66.1%);
			--circle: hsl(25 100% 96.7% / 0.4);
		}
	}

	body {
		background-color: var(--base);
	}

	h1 {
		color: var(--charged);
	}

	a, li::marker, h2 {
		color: var(--color);
		fill: var(--color);
	}

	.circle {
		color: var(--circle);
		fill: var(--circle);
	}

	a:hover {
		background-color: var(--hover);
	}

   li {
		font-size:18px;
		line-height: 2em;
		color: var(--color);
	}

	ul + h2 {
		margin-top: 1.5em;
	}

	ul {
		display: flex;
		flex-direction: column;
		margin-top: 1em;
		padding-left: 1.2em;
	}

	h1 + h2 {
		margin-top: 1em;
	}

	h1, h2, li {
		text-align: start;
	}

	.goals {
		width: 100%;
	}

</style>

<?php
	$short_Term_Goals = ["Get to understand basic design concepts", "Be able to recreate most of the things I see online", "Have a good grasp on algorithmic thinking", "Build a personal website", "Be in a position to create simple apps"];

	$longer_Term_Goals = ["Have a good grasp on both frontend and backend and find my niche", "Better networking", "Land a job"];
?>

<main>
	<div class='column'>

		<h1 class='attention-voice'>Goals</h1>
		<h2 class='careful-voice'>End of course goals</h2>

		<ul class='goals'>

			<?php foreach ($short_Term_Goals as $sh_Goal) { ?>
				<li> <?=$sh_Goal?> </li>
			<?php } ?>

		</ul>

		<h2 class='careful-voice'>5 years in goals</h2>

		<ul class='goals'>

			<?php foreach ($longer_Term_Goals as $l_Goal) { ?>
				<li> <?=$l_Goal?> </li>
			<?php } ?>

		</ul>

	</div>

</main>