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

	<h3>Currency conversion</h3>
	<p>Please enter the amount of money in euros:</p>

	<div class='field'>
		<label>Amount</label>
		<input type='number' name='euros' step='0.01' min='0.01'>
	</div>

	<p>Please enter the current euro exchange rate:</p>

	<div class='field'>
		<label>Rate</label>
		<input type='number' name='euro-rate' step='0.0001' min='0'>
	</div>

	<button type='submit' name='currency-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['currency-submit'])) {

		if (isset($_POST['euros'])) {
			$euros = $_POST['euros'];
		}

		if (isset($_POST['euro-rate'])) {
			$euroRate = $_POST['euro-rate'];
		}

		if (!is_numeric($euros) || !is_numeric($euroRate)) {
			$output = "<p>Please enter valid numbers</p>";
			echo $output;
			exit;
		}

		$dollarRate = 1;

		$dollars = round(($euros * $euroRate) / $dollarRate, 2);

		echo "<p>" . $euros . " euros at an exchange rate of " . $euroRate . " is " . $dollars . " U.S. dollars.</p>";

	}
?>