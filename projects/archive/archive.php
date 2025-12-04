<style>

		body {
			--color: hsl(240 100% 40.2%);
			--charged: hsl(0 67.9% 41.6%);
			--base: hsl(188 45.3% 81.4%);
			--hover: hsl(180, 92%, 40%);
		}

		@media (prefers-color-scheme: dark) {
			body {
				--color: hsl(188 45.3% 81.4%);
				--charged: hsl(0 67.9% 60.6%);
				--base: hsl(240 100% 40.2%);
				--hover: hsl(180, 92%, 20%);
			}
		}
	
		body {
			background-color: var(--base);
		}

		h1 {
			color: var(--charged);
		}

		p, h2, a, li::marker {
			color: var(--color);
		}

		a:hover {
			background-color: var(--hover);
		}

		ul {
			display: flex;
			flex-direction: column;
			margin-top: 2em;
		}

		.careful-voice {
			margin-top: 0.5em;
		}

</style>

<main>

	<h1 class='attention-voice'>A list of older PE projects</h2>

	<h2 class='careful-voice'>Older exercises (go to heaven)</h2>

	<ul>
		<li><a href='projects/archive/google-doc.html'>Google doc</a></li>
		<li><a href='projects/archive/google-doc-to-html.html'>Google doc styled</a></li>
		<li><a href='projects/archive/details-element.html'>Details element example</a></li>
		<li><a href='projects/archive/html-audio.html'>Html audio</a></li>
		<li><a href='projects/archive/base/index.php'>Base</a></li>
		<li><a href='?page=homepage'>Portal</a></li>
		<li><a href='projects/archive/adventure-game/index.html'>Adventure game</a></li>
	</ul>

</main>