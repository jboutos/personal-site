<style>

	html {
		--color: #233EA9;
		--link: #4A4A4F;
		--list: slategray;
		--base: lavender;
		--hover: hsl(235, 80%, 80%);
	}

	body {
		background-color: var(--base);
	}
	h1 {
		color: var(--color);
	}

	h2 {
		color: var(--color);
	}

	a {
		color: var(--link);
		&:hover {
			background-color: var(--hover);
		}
	}

	li::marker {
		color: var(--list);
	}

	.info {
		display: flex;
		flex-direction: column;
		align-items: start;
		gap: 10px;
	}

</style>


<main>

	<div class='column'>

		<h1 class='loud-voice'>My web-dev journey</h1>

		
		
		<div class='info'>
			<ul>
				<li><a href='?page=goals'>Goals</a></li>
				<li><a href='resume.php'>Resume</a></li>
				<li><a href='https://substack.com/@mrmusicvibe?utm_source=user-menu' target="_blank">My substack</a></li>
			</ul>
		</div>

	</div>

</main>