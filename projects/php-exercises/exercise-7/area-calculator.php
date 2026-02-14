<area>
	<a id='area'></a>

	<form action='index.php?show=ex7' method='POST'>

		<h3>Area calculator</h3>
		<p>Calculates the area of a rectangular room</p>

		<div class='field'>
			<label for='length'>Length</label>
			<input id='length' type='number' name='length' min='0' value="<?php echo $_POST['length'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='width'>Width</label>
			<input id='width' type='number' name='width' min='0' value="<?php echo $_POST['width'] ?? ''; ?>">
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

			if (strlen($length) == 0 || strlen($width) == 0) {
				$output = "<p>Both fields must have values!</p>";
				echo $output;
				return;
			} else {
				$area_Imp = $width * $length;
				$conversion_Factor = 0.09290304;
				$area_Met = round($area_Imp * $conversion_Factor, 3);
				$output = "<p>You entered dimensions of " . $length . " feet by " . $width . " feet.<br>The area is " . $area_Imp . " square feet, " . $area_Met . " square meters.</p>";
				echo $output;
			}
		}
	?>
</area>