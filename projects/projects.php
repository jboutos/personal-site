<style>

	body {
		--color: hsl(240 100% 40.2%);
		--charged: hsl(0 67.9% 41.6%);
		--base: hsl(188 45.3% 81.4%);
		--hover: hsl(180, 92%, 40%);
		--circle: hsla(240 100% 40.2% / 0.4);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(188 45.3% 81.4%);
			--charged: hsl(0 67.9% 60.6%);
			--base: hsl(240 100% 40.2%);
			--hover: hsl(180, 92%, 20%);
			--circle: hsl(188 45.3% 81.4% / 0.4);
		}
	}
	
	body {
		background-color: var(--base);
	}

	h1.attention-voice {
		color: var(--charged);
		margin-bottom: 0;
	}

	p, a, h2, li::marker, .circle {
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
		display: block;
		list-style-type: none;
		line-height: 1;
	}

	ul {
		margin-top: 3em;
	}

	project-card {
		display: block;
		max-width: 500px;
	}

	ul li:nth-child(9) img {
	    object-fit: contain;
	}

	h2 {
		margin-top: 0.5em;
	}

	.project .subtle-voice {
		margin-top: 0.5em;
	}

</style>

<?php include("projects-data.php") ?>

<div class='column'>

	<h1 class='attention-voice'>A list of completed PE projects thus far</h1>

	<h2 class='careful-voice'>The list will be updated as more projects are added</h2>

	<ul>
	<?php
	foreach ($projects as $project) {
		$id = $project["id"];
		$title = $project["title"];
		$link = $project["link"];
		$image = $project["image"];


		echo "<li class='project'>";

			echo "<project-card id='" . $id . "'>" .
						"<picture class='image'>" .
							"<img src='" . $image . "' alt='" . $title . " image'>" .
						"</picture>" .
						"<h2 class='subtle-voice'>" . $title . "</h2>" .
						"<a href='?page=project-details&project=$id'>See more</a>" .
			     "</project-card>";

		echo "</li>";
	}

	?>
	</ul>

</div>