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

	h1, h2 {
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

	li {
		list-style-type: none;
	}

	ul {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		row-gap: 1.5em;
		column-gap: 2em;
		padding: 0;
		margin-top: 1em;
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

<?php

	$goals = ['title' => 'Goals', 'image' => 'images/goals.png', 'link' => '?page=goals', 'target' => '_self'];
	$resume = ['title' => 'Resume', 'image' => 'images/resume.webp', 'link' => 'resume.php', 'target' => '_blank'];
	$substack = ['title' => 'My substack', 'image' => 'images/substack.png', 'link' => 'https://substack.com/@mrmusicvibe?utm_source=user-menu', 'target' => '_blank'];

	$infos = [$goals, $resume, $substack];

?>


<main>

	<div class='column'>

		<h1 class='attention-voice'>My web-dev journey</h1>

		<ul>
			<?php
				foreach ($infos as $info) {
					$title = $info['title'];
					$image = $info['image'];
					$link = $info['link'];
					$target = $info['target'];

					echo "<li>" .
								"<info-card>" .
									"<a href='" . $link . "' target='" . $target . "'>" .
										'<h1 class="careful-voice">' . $title . "</h1>" .
									"</a>" .
									"<picture>" .
										"<img src='" . $image . "'>" .
									"</picture>" .
					      	"</info-card>" .
					      "</li>";
				}
			?>
		</ul>

	</div>

</main>