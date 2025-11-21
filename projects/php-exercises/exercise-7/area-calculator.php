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

	<h3>Area calculator</h3>
	<p>What is the length of the room in feet?</p>

	<div class='field'>
		<label>Length</label>
		<input type='number' name='length' min='0'>
	</div>

	<p>What is the width of the room in feet?</p>

	<div class='field'>
		<label>Width</label>
		<input type='number' name='width' min='0'>
	</div>

	<button type='submit' name='area-submit'>Submit</button>

</form>

<?php
	
	if (isset($_POST['area-submit'])) {

		if (isset($_POST['length'])) {
			$length = $_POST['length'];
		}

		if (isset($_POST['width'])) {
			$width = $_POST['width'];
		}

		if ($length < 0 || $width < 0 || !is_numeric($length) || !is_numeric($width)) {
			$output = "<p>Cannot calculate the area</p>";
			echo $output;
		} else {
			$area_Imp = $width * $length;
			$conversion_Factor = 0.09290304;
			$area_Met = round($area_Imp * $conversion_Factor, 3);
			$output = "<p>You entered dimensions of " . $length . " feet by " . $width . " feet.<br>The area is " . $area_Imp . " square feet, " . $area_Met . " square meters.</p>";
			echo $output;
		}
	}
?>