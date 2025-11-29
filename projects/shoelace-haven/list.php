<?php include("shoelace-data.php") ?>

<shoelaces>

	<inner-column>

		<catalog>

			<h1 class='attention-voice'>A broad selection of shoelaces<br> for your everyday needs!</h1>

			<ul>
			<?php
				foreach ($shoelaces as $shoelace) {
					$id = $shoelace["id"];
					$name = $shoelace["name"];
					$cost = $shoelace["cost"];
					$availability = $shoelace["availability"];
					$size = $shoelace["size"];
					$color = $shoelace["color"];
					$image = $shoelace["image"];
					$description = $name . " in " . $size . " sizes and a " . $color . " of colors starting as low as " . $cost . " euros!";

					echo "<li class='shoelace'>";

						echo "<shoelace-card id='" . $id . "'>" .
									"<picture class='image'>" .
										"<img src='" . $image . "' alt='" . $name . " image'>" .
									"</picture>" .
									"<h2 class='subtle-voice'>" . $name . "</h2>" .
									"<p class='calm-voice'>" . $description . "</p>" .
									"<a href='?page=details&shoelace=$id'>See more</a>" .
						     "</shoelace-card>";

					echo "</li>";
				}
			?>
			</ul>
			
		</catalog>

	</inner-column>
	
</shoelaces>