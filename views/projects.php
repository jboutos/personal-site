<div class='column'>

	<h1 class='attention-voice'>A list of completed PE projects thus far</h1>

	<h2 class='careful-voice'>The list will be updated as more projects are added</h2>

	<ul>
	<?php

		foreach ($data as $project) {
			component("project-card", $project);
		}

	?>
	</ul>

</div>