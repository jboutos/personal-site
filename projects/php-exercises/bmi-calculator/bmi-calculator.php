<?php

	$units = $_POST['units'] ?? '';
	$height = '';
	$weight = '';
	$feetOrInches = $_POST['feet-or-inches'] ?? '';
	$heightFeet = '';
	$heightInches = '';
	$result = '';
	$error = '';
	$error2 = '';
	$error3 = '';

	if (isset($_POST['metric-unit-submit'])) {

		if (isset($_POST['units'])) {
			$units = strtolower($_POST['units']);
		}

		if ($units != 'm' && $units != 'i') {
			$error = '<p style="color: red">I can only accept either M or I</p>';
			$units = '';
		}
	}

	if ($units == 'i') {

		if (isset($_POST['feet-or-inches-submit'])) {

			if (isset($_POST['feet-or-inches'])) {
				$feetOrInches = strtolower($_POST['feet-or-inches']);
			}
		
			if ($feetOrInches != 'f' && $feetOrInches != 'i') {
				$error3 = '<p style="color: red">I can only accept either F or I</p>';
				$feetOrInches = '';
			}
		}

		if (isset($_POST['feet-submit'])) {

			if (isset($_POST['height-feet'])) {
				$heightFeet = $_POST['height-feet'];
			}
			
			if (isset($_POST['weight'])) {
				$weight = $_POST['weight'];
			}

			if (is_numeric($heightFeet) && is_numeric($weight) && strlen($heightFeet) > 0 && strlen($weight) > 0) {
				$heightInches = $heightFeet * 12;
				$result = round((703 * $weight) / ($heightInches ** 2), 2);
			} else {
				$error2 = '<p style="color: red">I need some valid values for weight and height!</p>';
				$heightFeet = '';
				$heightInches = '';
				$weight = '';
			}
		}

		elseif (isset($_POST['inches-submit'])) {

			if (isset($_POST['height-inches'])) {
				$heightInches = $_POST['height-inches'];
			}
			
			if (isset($_POST['weight'])) {
				$weight = $_POST['weight'];
			}

			if (is_numeric($heightInches) && is_numeric($weight) && strlen($heightInches) > 0 && strlen($weight) > 0) {
				$result = round((703 * $weight) / ($heightInches ** 2), 2);
			} else {
				$error2 = '<p style="color: red">I need some valid values for weight and height!</p>';
				$heightInches = '';
				$weight = '';
			}
		}
		
	} else {
		if (isset($_POST['measurement-submit'])) {

			if (isset($_POST['height'])) {
				$height = $_POST['height'];
			}

			if (isset($_POST['weight'])) {
				$weight = $_POST['weight'];
			}

			if (is_numeric($height) && is_numeric($weight) && strlen($height) > 0 && strlen($weight) > 0) {
				$result = round($weight / ($height ** 2), 2);
			} else {
				$error2 = '<p style="color: red">I need some valid values for weight and height!</p>';
				$height = '';
				$weight = '';
			}
		}
	}

	if (isset($_POST['reset2'])) {
		$units = '';
		$height = '';
		$weight = '';
		$result = '';
		$feetOrInches = '';
		$heightFeet = '';
		$heightInches = '';
	}

?>

<a id='temp'></a>

<form action='index.php?ex=bmi-calculator' method='POST'>


	<h3>BMI calculator</h3>
	<p>Calculates the body mass index</p>

	<?php if ($error): ?>
		<p><?php echo $error; ?></p>
	<?php endif; ?>

	<?php if ($error2): ?>
		<p><?php echo $error2; ?></p>
	<?php endif; ?>

	<?php if ($error3): ?>
		<p><?php echo $error3; ?></p>
	<?php endif; ?>

	<?php if (!$units): ?>

		<div class='field'>
			<label for='units'>Enter M for metric units.<br>Enter I for imperial units.</label>
			<input id='units' type='text' name='units' maxlength='1' required>
		</div>

		<button type='submit' name='metric-unit-submit'>Submit</button>

	<?php elseif ($result === ''): ?>

		<?php if ($units == "i"): ?>

			<?php if (!$feetOrInches): ?>

				<div class='field'>
					<label for='feet-or-inches'>Enter F for feet.<br>Enter I for inches.</label>
					<input id='feet-or-inches' type='text' name='feet-or-inches' maxlength='1' required>
					<input type='hidden' name='units' value='<?php echo $units ?>'>
				</div>

				<button type='submit' name='feet-or-inches-submit'>Submit</button>

			<?php endif; ?>	

			<?php if ($feetOrInches == 'f'): ?>

				<input type='hidden' name='units' value='<?php echo $units ?>'>
				<input type='hidden' name='feet-or-inches' value='<?php echo $feetOrInches ?>'>

				<div class='field'>
					<label for='height-feet'>Please Enter your height:</label>
					<input id='height-feet' type='number' name='height-feet' min='0' step='0.01' required>
				</div>

				<div class='field'>
					<label for='weightbmi'>Please enter your weight:</label>
					<input id='weightbmi' type='number' name='weight' min='0' step = 0.01 required>
				</div>

				<button type='submit' name='feet-submit'>Submit</button>

			<?php elseif ($feetOrInches == 'i'): ?>

				<input type='hidden' name='units' value='<?php echo $units ?>'>
				<input type='hidden' name='feet-or-inches' value='<?php echo $feetOrInches ?>'>

				<div class='field'>
					<label for='height-inches'>Please Enter your height:</label>
					<input id='height-inches' type='number' name='height-inches' min='0' step='0.01' required>
				</div>

				<div class='field'>
					<label for='weightbmi2'>Please enter your weight:</label>
					<input id='weightbmi2' type='number' name='weight' min='0' step='0.01' required>
				</div>

				<button type='submit' name='inches-submit'>Submit</button>

			<?php endif; ?>

		<?php else: ?>

			<input type='hidden' name='units' value='<?php echo $units ?>'>

			<div class='field'>
				<label for='heightmetric'>Please enter your height:</label>
				<input id='heightmetric' type='number' name='height' min='0' step ='0.01' required>
			</div>

			<div class='field'>
				<label for='weightmetric'>Please enter your weight:</label>
				<input id='weightmetric' type='number' name='weight' min='0' step ='0.01' required>
			</div>

			<button type='submit' name='measurement-submit'>Submit</button>

		<?php endif; ?>

	<?php else: ?>

		<?php 

			if ($result >= 18.5 && $result <= 25) {
				echo "<p><em>Your BMI is " . $result . "<br>You are within the ideal weight range.</em></p>";
			} else if ($result < 18.5) {
				echo "<p><em>Your BMI is " . $result . "<br>You are underweight.</em></p>";
			} else {
				echo "<p><em>Your BMI is " . $result . "<br>You are overweight.</em></p>";
			}

		?>

		<button type='submit' name='reset2'>Go back</button>

	<?php endif; ?>

</form>