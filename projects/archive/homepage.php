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

	h1, a, li::marker {
		color: var(--color);
	}

	h2 {
		color: var(--charged);
	}

	a:hover {
		background-color: var(--hover);
	}

	ul {
		display: flex;
		flex-direction: column;
		margin-top: 1em;
	}

	.careful-voice {
		margin-top: 1em;
	}

</style>

<main>

	<h1 class='attention-voice'>Portal</h1>

	<h2 class='careful-voice'>Booking sites</h2>
	
	<ul>
		<li><a href='https://www.booking.com/' target='book'>Booking</a></li>
		<li><a href='https://www.travala.com/' target="travala">Travala</a></li>
		<li><a href='https://www.trivago.com/' target='triv'>Trivago</a></li>
	</ul>

	<h2 class='careful-voice'>Sports sites</h2>
	
	<ul>
		<li><a href='https://www.hoopfellas.gr/el/' target='hoops'>Hoopfellas</a></li>	
		<li><a href='https://amerikanos24.com/' target='amer'>Amerikanos24</a></li>
		<li><a href='https://www.gazzetta.gr/' target='gazz'>Gazzetta</a></li>
	</ul>

	<h2 class='careful-voice'>News sites</h2>

	<ul>
		<li><a href='https://www.efsyn.gr/' target='ef'>Efsyn</a></li>
		<li><a href='https://www.pronews.gr/' target='pro'>Pronews</a></li>
	</ul>
</main>