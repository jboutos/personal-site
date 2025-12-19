<style>

	body {
		--color: hsl(28 42.9% 31%);
		--base: hsl(36 75.3% 85.1%);
		--hover: hsl(28 42.9% 57.5%);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(36 75.3% 85.1%);
			--base: hsl(28 42.9% 31%);
			--hover: hsl(235, 80%, 60%);
		}
	}

	body {
		background-color: var(--base);
	}

	.loud-voice, .calm-voice, a {
		color: var(--color);
	}

	a:hover {
		color: var(--hover);
	}

	.loud-voice {
		padding-top: 0;
	}

	img {
		object-fit: contain;
	}

	container {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: start;

		margin-top: 7em;
	}

	.error {
		max-width: 350px;
	}

	.loud-voice {
		margin: 0;
	}

</style>

<container>
	<picture class='error'>
		<img src="images/404.png">
	</picture>
	<h1 class='loud-voice'><?= $title ?></h1>
	<p class='calm-voice'><?= $subtitle ?></p>
	<a href="?page=home"><?= $link ?></a>
</container>