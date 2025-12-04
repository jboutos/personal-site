
<style>

	body {
		--color: hsl(296 70.7% 30.8%);
		--base: hsl(7 75.8% 93.5%);
		--hover: hsl(302 58.9% 64.7%);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(7 75.8% 93.5%);
			--base: hsl(296 70.7% 30.8%);
			--hover: hsl(302 58.9% 64.7%);
		}
	}

	body {
		background-color: var(--base);
	}

	h1, h2, p, a, li, li::marker {
		color: var(--color);
	}

	a:hover {
		background-color: var(--hover);
	}

	.links {
		display: block;
		margin-top: 1em;
	}

	li {
		list-style-type: none;
	}

	h2 {
		margin-top: 1em;
	}

	h2:last-of-type {
	 padding-bottom: 0;
	}

	.foods {
		margin-top: 2em;
	}

</style>

<?php

	$mousakas = ['name' => 'Mousakas', 'image' => 'images/mousakas.jpg', 'link' => 'https://akispetretzikis.com/en/recipe/1559/moysakas', 'target' => '_blank'];
	$tripe = ['name' => 'Tripe soup', 'image' => 'images/patsas.jpg', 'link' => 'https://www.amberq.gr/en/grillphilosophy/greek-patsas-recipe-in-the-wood-fired-oven', 'target' => '_blank'];
	$strapatsada = ['name' => 'Strapatsada', 'image' => 'images/strapatsada.jpg', 'link' => 'https://akispetretzikis.com/en/recipe/3347/kagiana-strapatsada', 'target' => '_blank'];

	$foods = [$mousakas, $tripe, $strapatsada];

?>

<main>

	<div class ='column'>
		
		<h1 class='attention-voice'>Favorite foods</h1>
		<p class='calm-voice'>Some of my favorite foods include:</p>
		
		<ul>
			<?php
				foreach ($foods as $food) {
					$name = $food['name'];
					$image = $food['image'];
					$link = $food['link'];
					$target = $food['target'];

					echo "<li>" .
								"<food-card>" .
									'<h2 class="careful-voice">' . $name . "</h2>" .
									"<a href='" . $link . "' target='" . $target . "'> 
										Recipe
									</a>" .
									"<picture>" .
										"<img src='" . $image . "'>" .
									"</picture>" .
					      	"</food-card>" .
					      "</li>";
				}
			?>
		</ul>

		<h2 class='careful-voice foods'>Introductory links</h2>

		<?php include('footer.php') ?>
		
	</div>
</main>