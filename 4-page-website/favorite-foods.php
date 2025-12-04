
<style>
	body {
		background-color: mistyrose;
	}

	h1, h2 {
		color: #7f1786;
	}

	p, a, li, li::marker {
		color: darkmagenta;
	}

	.links {
		display: block;
		margin-top: 1em;
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

	h2:last-of-type {
		 padding-bottom: 0;
		 margin-top: 0.5em;
		}


	h1 {
		padding-top: 1em;
		padding-bottom: 0.5em;
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

		<h2 class='careful-voice'>Introductory links</h2>

		<?php include('footer.php') ?>
		
	</div>
</main>