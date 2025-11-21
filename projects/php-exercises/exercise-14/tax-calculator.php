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

	<h3>Tax calculator</h3>
	<p>Please enter order amount:</p>

	<div class='field'>
		<label>Amount</label>
		<input type='number' name='amount' step='0.01' min='0.01'>
	</div>

	<p>Please enter the state:</p>

	<div class='field'>
		<label>State</label>
		<input type='text' name='state'>
	</div>

	<button type='submit' name='tax-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['tax-submit'])) {

		if (isset($_POST['amount'])) {
			$amount = $_POST['amount'];
		}

		if (isset($_POST['state'])) {
			$state = strtoupper($_POST['state']);
		}

		if (!is_numeric($amount) || is_numeric($state) || strlen($state) == 0) {
			$output = "<p>The input is not correct!</p>";
			echo $output;
			exit;
		}

		$subtotal = $amount;
		$rate = 0.055;
		$tax = round($rate * $subtotal, 2);
		$total = round($subtotal + $tax, 2);
		$subtotal = number_format($amount, 2, ",", ".");
		$total = number_format($total, 2, ",", ".");
		$tax = number_format($tax, 2, ",", ".");

		if ($state == "WI") {
			echo "<p>The subtotal is $" . $subtotal . ".<br>The tax is $" . $tax . ".<br>The total is $" . $total . ".</p>";
		} else {
			echo "<p>The total is $" . $total . ".</p>";
		}
	}


?>