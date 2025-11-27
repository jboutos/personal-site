<style>
	inner-column {
		display: flex;
		flex-direction: column;
		max-width: 1600px;
		margin-left: auto;
		margin-right: auto;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	header {
		@media(min-width: 900px) {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
	}

	footer {
		@media(min-width: 900px) {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
	}

	header a {
		margin-bottom: 1em;
		color: brown;
	}

	footer a {
		margin-top: 2em;
		color: brown;
	}

	form {
		max-width: 300px;
		background: linear-gradient(150deg, lightgray, #F2F0EF);
		padding: 1em;
		border: 1px solid black;
		border-radius: 10px;
		box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
	}

	button[type='submit'] {
		margin-top: 20px;
		border-radius: 15px;
		border: 1px solid black;
		box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
		padding: 3px 7px;
		cursor: pointer;
	}

	input {
		border-radius: 10px;
		border: 1px solid gray;
		padding: 3px 7px;
	}

	label {
		opacity: 0.5;
		margin: 0;
		font-size: 13px;
		padding-bottom: 5px;
		font-family: 'Monda', sans-serif;

	}

	h3 {
		color: brown;
	}

	.field + .field {
		margin-top: 1.1em;
	}

	partials {
		display: grid;
		gap: 2em;

		@media(min-width: 600px) {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			column-gap: 1em;
			row-gap: 2em;
		}

		@media(min-width: 750px) {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
		}

		@media(min-width: 900px) {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
		}
	}

	.mini {
		font-size: 13px;
	}

	p, a {
		font-family: 'Monda', sans-serif;
		font-size: 16px;
	}

	h1, h2, h3, h4 {
		font-family: 'Julius Sans One', sans-serif;
	}

	span {
		color: green;
	}

	.subfield {
		display: flex;
		align-items: center;
	}
</style>


<?php

	$choice = $_POST['choice'] ?? '';
	$error = '';
	$error2 = '';
	$error3 = '';
	$result = '';
	$choiceImperial = $_POST['choice-imperial'] ?? '';

	if (isset($_POST['choice-submit'])) {

		if (isset($_POST['choice'])) {
			$choice = strtolower($_POST['choice']);
		}

		if (strlen($choice) == 0 || ($choice != 'm' && $choice != 'i')) {
			$error = "You must enter either M or I";
			$choice = '';
		}
	}

	if ($choice == 'i') {

		if (isset($_POST['choice-imperial-submit'])) {

			if (isset($_POST['choice-imperial'])) {
				$choiceImperial = strtolower($_POST['choice-imperial']);
			}

			if (($choiceImperial != 'f' && $choiceImperial != 'i') || strlen($choiceImperial) == 0) {
				$error3 = "<p>You must enter either F or I</p>";
				$choiceImperial = '';
			}
		}

		if ($choiceImperial == 'f') {

			if (isset($_POST['imperial-feet-submit'])) {

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
					$error2 = '<p>The values must be numbers and not null</p>';
					$heightInches = '';
					$heightFeet = '';
					$weight = '';
				}
			}
		} elseif ($choiceImperial == 'i') {
			if (isset($_POST['imperial-inches-submit'])) {

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
		}
	} else {

		if (isset($_POST['metric-submit'])) {

			if (isset($_POST['height-metric'])) {
				$heightMetric = $_POST['height-metric'];
			}

			if (isset($_POST['weight-metric'])) {
				$weightMetric = $_POST['weight-metric'];
			}

			if (is_numeric($heightMetric) && is_numeric($weightMetric) && strlen($heightMetric) > 0 && strlen($weightMetric) > 0) {
				$result = round($weightMetric / ($heightMetric ** 2), 2);
			} else {
				$error2 = '<p style="color: red">I need some valid values for weight and height!</p>';
				$heightMetric = '';
				$weightMetric = '';
			}
		}
	}

?>


<form method='POST'>

	<h3>Bmi calculator</h3>
	<p>Calculates the bmi based on user input</p>


	<?php if ($error): ?>
		<p><?php echo $error; ?></p>
	<?php endif; ?>

	<?php if ($error2): ?>
		<p><?php echo $error2; ?></p>
	<?php endif; ?>

	<?php if ($error3): ?>
		<p><?php echo $error3; ?></p>
	<?php endif; ?>


	<?php if (!$choice): ?>

		<div class='field'>
			<label>Please enter M for metric units<br>Please enter I for imperial units</label>
			<input type='text' name='choice' maxlength='1' required>
		</div>

		<button type='submit' name='choice-submit'>Submit</button>

	<?php elseif ($result === ''): ?>

		<?php if ($choice == 'i'): ?>

			<?php if (!$choiceImperial): ?>

				<div class='field'>
					<label>Please enter F for feet<br>Please enter I for inches</label>
					<input type='text' name='choice-imperial' maxlength='1' required>
					<input type='hidden' name='choice' value='<?php echo $choice ?>'>
				</div>

				<button type='submit' name='choice-imperial-submit'>Submit</button>

			<?php endif; ?>

				<?php if ($choiceImperial == 'f'): ?>

					<div class='field'>
						<label>Please enter the height</label>
						<input type='number' name='height-feet' min='1' step='0.01' required>
						<input type='hidden' name='choice' value='<?php echo $choice ?>'>
						<input type='hidden' name='choice-imperial' value='<?php echo $choiceImperial ?>'>
					</div>

					<div class='field'>
						<label>Please enter the weight</label>
						<input type='number' name='weight' min='1' step='0.01' required>
						<input type='hidden' name='choice' value='<?php echo $choice ?>'>
						<input type='hidden' name='choice-imperial' value='<?php echo $choiceImperial ?>'>
					</div>

					<button type='submit' name='imperial-feet-submit'>Submit</button>

				<?php elseif ($choiceImperial == 'i'): ?>

					<div class='field'>
						<label>Please enter the height</label>
						<input type='number' name='height-inches' min='1' step='0.01' required>
						<input type='hidden' name='choice' value='<?php echo $choice ?>'>
						<input type='hidden' name='choice-imperial' value='<?php echo $choiceImperial ?>'>
					</div>

					<div class='field'>
						<label>Please enter the weight</label>
						<input type='number' name='weight' min='1' step='0.01' required>
						<input type='hidden' name='choice' value='<?php echo $choice ?>'>
						<input type='hidden' name='choice-imperial' value='<?php echo $choiceImperial ?>'>
					</div>

					<button type='submit' name='imperial-inches-submit'>Submit</button>

				<?php endif; ?>

		<?php else: ?>

			<div class='field'>
				<label>Please enter the height</label>
				<input type='number' name='height-metric' min='1' step='0.01' required>
				<input type='hidden' name='choice' value='<?php echo $choice ?>'>
			</div>

			<div class='field'>
				<label>Please enter the weight</label>
				<input type='number' name='weight-metric' min='1' step='0.01' required>
				<input type='hidden' name='choice' value='<?php echo $choice ?>'>
			</div>

			<button type='submit' name='metric-submit'>Submit</button>

		<?php endif; ?>

	<?php else: ?>

		<p>bla</p>
		<a href=''>Go back</a>

	<?php endif; ?>

</form>