<blood-alcohol>
	<a id='blood'></a>

	<form action='index.php?ex=blood-alcohol-calculator' method='POST'>

		<h3>Blood alcohol calculator</h3>
		<p>Calculates the blood alcohol content</p>

		<div class='field'>
			<label for='weight'>Weight</label>
			<input id='weight' type='number' name='weight-blood' min='1' step='0.1' value="<?php echo $_POST['weight-blood'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='gender'>Gender</label>
			<input id='gender' type='text' name='gender' value="<?php echo $_POST['gender'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='drinks'>Total oz of drinks</label>
			<input id='drinks' type='number' name='drinks' step='0.1' min='0' value="<?php echo $_POST['drinks'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='volume'>Alcohol amount by volume</label>
			<input id='volume' type='number' name='volume' step='0.1' min='0' value="<?php echo $_POST['volume'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='timedr'>Hours passed since last drink</label>
			<input id='timedr' type='number' name='time' min='0' value="<?php echo $_POST['time'] ?? ''; ?>">
		</div>

		<button type='submit' name='blood-submit'>Submit</button>
	</form>

	<?php

		if (isset($_POST['blood-submit'])) {

			if (isset($_POST['weight-blood'])) {
				$weight_blood = $_POST['weight-blood'];
			}

			if (isset($_POST['gender'])) {
				$gender = strtolower($_POST['gender']);
			}

			if (isset($_POST['drinks'])) {
				$drinks = $_POST['drinks'];
			}

			if (isset($_POST['volume'])) {
				$volume = $_POST['volume'];
			}

			if (isset($_POST['time'])) {
				$time = $_POST['time'];
			}
				
			if (strlen($weight_blood) == 0 || strlen($drinks) == 0 || strlen($volume) == 0 || strlen($time) == 0 ) {
	    		echo "<p>All fields must have values!</p>";
	    		return;
			} else if ($gender !== "male" && $gender !== "female") {
				echo "<p>Please enter a valid gender value</p>";
	    		return;
			}

			if ($gender == "male") {
				$r = 0.73;
			} else {
				$r = 0.66;
			}

			$a = $drinks * ($volume / 100);
			$bac = (($a * 5.14) / ($weight_blood * $r)) - (0.015 * $time);
			$bac = round($bac, 2);

			if ($bac < 0.08) {
				echo "<p>Your BAC is " . $bac . "<br>It is legal for you to drive.</p>";
			} else {
				echo "<p>Your BAC is " . $bac . "<br>It is not legal for you to drive.</p>";
			}

		}

	?>
</blood-alcohol>