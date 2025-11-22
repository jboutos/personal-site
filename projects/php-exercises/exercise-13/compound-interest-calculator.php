<a id='compound'></a>

<form action='index.php#compound' method='POST'>

	<h3>Compound interest calculator</h3>
	<p>Calculates the compound interest of a principal amount of money</p>

	<div class='field'>
		<label for='amount44'>Principal amount</label>
		<input id='amount44' type='number' name='amount' step='0.01' min='0.01'>
	</div>

	<div class='field'>
		<label for='time44'>Time in years</label>
		<input id='time44' type='number' name='time' step='1' min='1'>
	</div>

	<div class='field'>
		<label for='rate44'>Interest rate as a percentage</label>
		<input id='rate44' type='number' name='rate' step='0.01' min='0.01' max='100'>
	</div>

	<div class='field'>
		<label for='period44'>Compound periods</label>
		<input id='period44' type='number' name='period' step='1' min='1'>
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

		if (strlen($amount) == 0 || strlen($time) == 0 || strlen($rate) == 0 || strlen($period) == 0) {
			$output = "<p>All fields must have values!</p>";
			echo $output;
			exit;
		}

		$rate = $rate / 100;
		$finalAmount = number_format(round($amount * ((1 + $rate / $period) ** ($period * $time)), 2), 2, ",", ".");

		echo "<p>$" . $amount . " invested at " . $rate * 100 . "%" . " for " . $time . " years compounded " . $period . " times per year is $" . $finalAmount . ".</p>";
	}

?>