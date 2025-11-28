<?php

	$shape = $_POST['shape'] ?? '';
	$material = $_POST['material'] ?? '';
	$size = $_POST['size'] ?? '';
	$color = $_POST['color'] ?? '';
	$message = '';
	
	if (isset($_POST['submit'])) {

		if (isset($_POST['shape'])) {
			$shape = strtolower($_POST['shape']);
		}

		if (isset($_POST['material'])) {
			$material = strtolower($_POST['material']);
		}

		if (isset($_POST['size'])) {
			$size = $_POST['size'];
		}

		if (isset($_POST['color'])) {
			$color = strtolower($_POST['color']);
		}

		if (!in_array($shape, ["oval", "flat", "round"]) || !in_array($material, ["cotton", "synthetic", "leather"]) || !in_array($color, ["white", "black", "beige", "blue", "brown"])) {
			$message = "<p class='calm-voice error'><em>Please enter the acceptable values in the fields!</em></p>";
			$order = [$shape => strtolower($_POST['shape']), $material => strtolower($_POST['material']), $size => $_POST['size'], $color => strtolower($_POST['color'])];
		} else {
			$message = "<p class='calm-voice'><em>Your request for a pair of " . $shape . " shaped " . $material . " shoelaces of color " . $color . " and size " . $size . "cm was received!</em></p>";
		}
	}

?>

<calculator>

	<inner-column>

		<h1 class=attention-voice>Create your very own custom shoelace!</h1>

		<form method='POST'>

			<h3 class='subtle-voice'>Shoelace customizer</h3>

			<div class='field'>
				<label for='shape'>Shape (oval, flat, round)</label>
				<input id='shape' type='text' name='shape' value='<?php echo $shape; ?>' required>
			</div>

			<div class='field'>
				<label for='material'>Material (cotton, synthetic, leather)</label>
				<input id='material' type='text' name='material' value='<?php echo $material; ?>' required>
			</div>

			<div class='field'>
				<label for='size'>Size (in cm)</label>
				<input id='size' type='number' name='size' min='60' max='180' step='1' value='<?php echo $size; ?>' required>
			</div>

			<div class='field'>
				<label for='color'>Color (white, black, beige, blue, brown)</label>
				<input id='color' type='text' name='color' value='<?php echo $color; ?>' required>
			</div>

			<button type='submit' name='submit'>Submit</button>

			<?php echo $message; ?>

		</form>

	</inner-column>

</calculator>