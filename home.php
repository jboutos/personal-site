<style>

	body {
		--color: hsl(230 59.8% 40%);
		--link: hsl(240 3.3% 30%);
		--list: hsl(210 12.6% 50.2%);
		--base: hsl(48 0% 93.7%);
		--hover: hsl(225 46.1% 52.7%);
		--circle: hsl(230 59.8% 40% / 0.4);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(240 61.3% 93.9%);
			--link: hsl(240 61.3% 93.9%);
			--list: hsl(332 82.4% 55.9%);
			--base: hsl(230 59.8% 40%);
			--hover: hsl(225 46.1% 32.7%);
			--circle: hsl(240 61.3% 93.9% / 0.4);
		}
	}

	body {
		background-color: var(--base);
	}

	h1, h2 {
		color: var(--color);
		fill: var(--color);
	}

	.circle {
		color: var(--circle);
		fill:var(--circle);
	}

	a {
		display: inline-block;
		text-decoration: underline;
		color: var(--color);
	}

	.subtle-voice {
		color: var(--color);
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

	info-card {
		display: block;
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