<tax>
	<a id='tax-calc'></a>

	<form action='index.php?ex=tax-calculator' method='POST'>

		<h3>Tax calculator</h3>
		<p>Calculates the tax and returns is the state is wisconsin</p>

		<div class='field'>
			<label for='amount55'>Amount of money</label>
			<input id='amount55' type='number' name='amount' step='0.01' min='0.01' value="<?php echo $_POST['amount'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='state'>Us state</label>
			<input id='state' type='text' name='state'>
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

			if (strlen($amount) == 0 || strlen($state) == 0) {
				$output = "<p>Both fields must have values!</p>";
				echo $output;
				return;
			} else if (is_numeric($state)) {
				$output = "<p>The state cnnot be a number!</p>";
				echo $output;
				return;
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
</tax>