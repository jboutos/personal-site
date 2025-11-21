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

	<h3>Compound interest calculator</h3>
	<p>Please enter the principal amount of money:</p>

	<div class='field'>
		<label>Amount</label>
		<input type='number' name='amount' step='0.01' min='0.01'>
	</div>

	<p>Please enter the number of years to invest the money:</p>

	<div class='field'>
		<label>Time</label>
		<input type='number' name='time' step='1' min='1'>
	</div>

	<p>Please enter the interest rate as a percentage:</p>

	<div class='field'>
		<label>Rate</label>
		<input type='number' name='rate' step='0.01' min='0.01' max='100'>
	</div>

	<p>Please enter the number of times the interest is compounded per year:</p>

	<div class='field'>
		<label>Compound periods</label>
		<input type='number' name='period' step='1' min='1'>
	</div>

	<button type='submit' name='compound-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['compound-submit'])) {

		if (isset($_POST['amount'])) {
			$amount = $_POST['amount'];
		}

		if (isset($_POST['time'])) {
			$time = $_POST['time'];
		}

		if (isset($_POST['rate'])) {
			$rate = $_POST['rate'];
		}

		if (isset($_POST['period'])) {
			$period = $_POST['period'];
		}

		if (!is_numeric($amount) || !is_numeric($time) || !is_numeric($rate) || !is_numeric($period)) {
			$output = "<p>Please enter valid numbers</p>";
			echo $output;
			exit;
		}

		$rate = $rate / 100;
		$finalAmount = number_format(round($amount * ((1 + $rate / $period) ** ($period * $time)), 2), 2, ",", ".");

		echo "<p>$" . $amount . " invested at " . $rate * 100 . "%" . " for " . $time . " years compounded " . $period . " times per year is $" . $finalAmount . ".</p>";
	}

?>