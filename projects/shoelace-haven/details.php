<?php include("shoelace-data.php") ?>

<?php

	$shoelace_id = '';

	if (isset($_GET['shoelace'])) {
		$shoelace_id = $_GET['shoelace'];
	}

	foreach ($shoelaces as $shoelace) {
		if ($shoelace_id == $shoelace["id"]) {
			$detail = $shoelace;
		}
	}
?>

<?php if (isset($detail)) { 
	

	$description2 = "Our " . strtolower($detail["name"]) . " are crafted for durability and style, available in " . $detail["size"]
		        . " sizes, with a " . $detail["color"] . " of colors to match any shoe or outfit. " . "Prices start as low as " . $detail["cost"] . " euros, "
		        . ($detail["availability"] ? "currently in stock and ready to wear!" : "but currently out of stock, grab them when available.");
?>

	<description>

		<inner-column>

			<container>

				<picture>
					<img src='<?=$detail["image"]?>' alt='<?=$detail["name"] . " image"?>'>
				</picture>

				<div class='description'>

					<h1 class='attention-voice'><?=$detail['name']?></h1>
					<p class='calm-voice'><?=$description2?></p>
					<?php if ($detail["availability"]) { ?>
						<a href='#'>Add to cart</a>
					<?php } else { ?>
						<span>Restock soon</span>
					<?php } ?>

				</div>

			</container>

		</inner-column>

	</description>

<?php } else {?>

	<description2>

		<inner-column>

			<container>

				<div class='description'>

					<h1 class='attention-voice'>No product found!</h1>
					<p class='calm-voice'>Check out our list for more shoelaces <a href='?page=list'>here</a></p>

				</div>

			</container>

		</inner-column>

	</description2>

<?php } ?>
