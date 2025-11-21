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

	<h3>Simple interest calculator</h3>
	<p>Please enter the principal amount of money:</p>

	<div class='field'>
		<label>Amount</label>
		<input type='number' name='amount' step='0.01' min='0.01'>
	</div>

	<p>Please enter the rate as a percentage:</p>

	<div class='field'>
		<label>Rate</label>
		<input type='number' name='rate' step='0.01' min='0.01' max="100">
	</div>

	<p>Please enter the time in years:</p>

	<div class='field'>
		<label>Time</label>
		<input type='number' name='time' step='1' min='1'>
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

		$rate = $rate / 100;

		$finalAmount = number_format(round($amount * (1 + ($rate * $time)), 2), 2, ",", ".");

		echo "<p>After " . $time . " years at " . $rate . "%, the investment will be worth $" . $finalAmount . ".</p>";

		for ($i = 1; $i <= $time; $i++) {
			$amountEachYear = round($amount * (1 + ($rate * $i)), 2);
			echo "<p>At the end of year " . $i . " the investment will be worth $" . $amountEachYear . ".</p>";
		}
	}

?>