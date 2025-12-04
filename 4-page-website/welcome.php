
<style>

	body {
		--color: hsl(296 70.7% 30.8%);
		--base: hsl(7 75.8% 93.5%);
		--hover: hsl(302 58.9% 80.7%);
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

	.substack {
		font-size: 1rem;
	}

	.attention-voice {
		padding-bottom: 30px;
	}

	.links {
		display: block;
		margin-top: 1em;
	}

	.calm-voice {
		padding-bottom: 0;
	}
</style>

<main>

	<div class='column'>

		<h1 class='attention-voice'>Hello people!</h1>
		<p class='calm-voice'>I'm John and I'm trying to learn more about web development! I'm sort of introverted and have a difficult time finding anything to talk about regarding myself. Hopefully, given some time I will at very least be able to present myself through my work instead of words! In the meantime you can always check out my <a href='https://substack.com/@mrmusicvibe?utm_source=user-menu' target="_blank" class='substack'>substack</a>!</p>

		<h2 class='careful-voice'>Introductory links</h2>

		<?php include('footer.php') ?>

	</div>

</main>