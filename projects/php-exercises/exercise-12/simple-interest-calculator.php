<interest>
	<a id='interest-calc'></a>

	<form action='index.php#interest-calc'method='POST'>

		<h3>Simple interest calculator</h3>
		<p>Calculates the interest of a principal amount</p>

		<div class='field'>
			<label for='amount'>Principal amount</label>
			<input id='amount' type='number' name='amount' step='0.01' min='0.01'>
		</div>

		<div class='field'>
			<label for='rate2'>Rate as percentage</label>
			<input id='rate2' type='number' name='rate' step='0.01' min='0.01' max="100">
		</div>

		<div class='field'>
			<label for='time'>Time in years</label>
			<input id='time' type='number' name='time' step='1' min='1'>
		</div>

		<button type='submit' name='interest-submit'>Submit</button>
	</form>

	<?php

		if (isset($_POST['interest-submit'])) {

			if(isset($_POST['amount'])) {
				$amount = $_POST['amount'];
			}

			if(isset($_POST['rate'])) {
				$rate = $_POST['rate'];
			}

			if(isset($_POST['time'])) {
				$time = $_POST['time'];
			}

			if (strlen($amount) == 0 || strlen($rate) == 0 || strlen($time) == 0) {
				echo "<p>All fields must have values!</p>";
				return;
			}

			$rate = $rate / 100;

			$finalAmount = number_format(round($amount * (1 + ($rate * $time)), 2), 2, ",", ".");

			echo "<p>After " . $time . " years at " . $rate . "%, the investment will be worth $" . $finalAmount . ".</p>";

			for ($i = 1; $i <= $time; $i++) {
				$amountEachYear = round($amount * (1 + ($rate * $i)), 2);
				echo "<p>At the end of year " . $i . " the investment will be worth $" . $amountEachYear . ".</p>";
			}
		}
	?>
</interest>