<style>
	
	body {
		background-color: powderblue;
	}

	.attention-voice {
		color: firebrick;
	}

	p, a, h2, li::marker {
		color: mediumblue;
	}

	a:hover {
		background-color: hsl(180, 92%, 40%);
	}

	li {
		display: block;
		list-style-type: none;
	}

	ul {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		row-gap: 1.5em;
		column-gap: 2em;
		padding: 0;
		margin-top: 3em;
	}

	project-card {
		display: block;
		max-width: 500px;
	}

	ul li:nth-child(10) img {
	    object-fit: contain;
	}

	h2 {
		padding-bottom: 0;
		margin-top: 0.5em;
	}

	h1 {
		padding-top: 1em;
		padding-bottom: 0.5em;
	}

</style>

<?php include("projects-data.php") ?>

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