<style>
	body {
		background: url('images/tropical.jpg');
		background-size: cover;
		box-sizing: border-box;

		margin-top: 6em;
		margin-left: 10em;
	}

	h1, a {
		margin: 0;
		padding: 0;
	}

	nav {
		display: flex;	
		flex-direction: column;
		align-items: start;
		gap: 0.5em;
	}

	.attention-voice, a {
		color: white;
	}

	.attention-voice {
		font-family: 'Catamaran', serif;
		font-size: 3rem;
		font-weight: 600;
	}

	a {
		display: block;
		font-family: 'Mulish', sans-serif;
		font-size: 1.5rem;
	}

	a:hover {
		background-color: hsla(0 0% 100% / 0.3);
	}
</style>

<body>

	<h1 class='attention-voice'>Please choose between the following themes:</h1>
	<nav>
		<a href='index.php?theme=default'>Original theme</a>
		<a href='index.php?theme=purple'>(Almost) everything is purple</a>
	</nav>

</body>