<paint>
	<a id='paint'></a>

	<form action='index.php?ex=paint-calculator' method='POST'>

		<h3>Paint calculator (rectangle room)</h3>
		<p>Calculates the amount of paint needed to paint a room</p>

		<div class='field'>
			<label for='length23'>Length</label>
			<input id='length23' type='number' name='length' min='1' value="<?php echo $_POST['length'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='width23'>Width</label>
			<input id='width23' type='number' name='width' min='1' value="<?php echo $_POST['width'] ?? ''; ?>">
		</div>

		<button type='submit' name='paint-submit'>Submit</button>

	</form>

	<?php

		if (isset($_POST['paint-submit'])) {

			if (isset($_POST['length'])) {
				$length = $_POST['length'];
			}

			if (isset($_POST['width'])) {
				$width = $_POST['width'];
			}

			if (strlen($length) == 0 || strlen($width) == 0) {
				$output = "<p>Both fields need values!</p>";
				echo $output;
				return;
			}

			$area = $length * $width;
			$conversionRate = 350;
			$num = $area / $conversionRate;
			$floorNum = floor($num);
			$fraction = $num - $floorNum;
			if ($fraction == 0) {
				$paint = $floorNum * $conversionRate;
			} else {
				$paint = $floorNum * $conversionRate + 1;
			}

			if ($paint == 1) {
				echo "<p>You will need to purchase " . $paint . " gallon of paint to cover " . $area . " square feet.</p>";
			} else {
				echo "<p>You will need to purchase " . $paint . " gallons of paint to cover " . $area . " square feet.</p>";
			}
		}

	?>
</paint>