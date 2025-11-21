<style>

	.field {
		display: flex;
		flex-direction: column;
	}

	form {
		max-width: 300px;
		background-color: lightgray;
		padding: 1em;
		border: 2px solid black;
	}

	button[type='submit'] {
		margin-top: 20px;
	}

	label {
		margin-bottom: 10px;
	}

	h3 {
		color: brown;
	}

</style>

<form method='POST'>

	<h3>Paint calculator (rectangle room)</h3>
	<p>Please enter the length in feet</p>

	<div class='field'>
		<label></label>
		<input type='number' name='length' min='1'>
	</div>

	<p>Please enter the width in feet</p>

	<div class='field'>
		<label></label>
		<input type='number' name='width' min='1'>
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

		if (!is_numeric($length) || !is_numeric($width)) {
			$output = "<p>Cannot calculate the paint</p>";
			echo $output;
			exit;
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