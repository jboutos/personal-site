<a id='checkout'></a>

<form action='index.php#checkout' method='POST'>

	<h3>Checkout calculator</h3>
	<p>Calculates the subtotal total and tax of a transaction</p>

	<div class='field'>
		<label for='price1'>Price of item 1</label>
		<input id='price1' type='number' name='price1' min='0.01' step='0.01'>
	</div>

	<div class='field'>
		<label for='quant1'>Quantity of item 1</label>
		<input id='quant1' type='number' name='quant1' min='1'>
	</div>

	<div class='field'>
		<label for='price2'>Price of item 2</label>
		<input id='price2' type='number' name='price2' min='0.01' step='0.01'>
	</div>

	<div class='field'>
		<label for='quant2'>Quantity of item 2</label>
		<input id='quant2' type='number' name='quant2' min='1'>
	</div>

	<div class='field'>
		<label for='price3'>Price of item 3</label>
		<input id='price3' type='number' name='price3' min='0.01' step='0.01'>
	</div>

	<div class='field'>
		<label for='quant3'>Quantity of item 3</label>
		<input id='quant3' type='number' name='quant3' min='1'>
	</div>

	<button type='submit' name='checkout-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['checkout-submit'])) {

		if (isset($_POST['price1'])) {
			$price1 = $_POST['price1'];
		}

		if (isset($_POST['quant1'])) {
			$quant1 = $_POST['quant1'];
		}

		if (isset($_POST['price2'])) {
			$price2 = $_POST['price2'];
		}

		if (isset($_POST['quant2'])) {
			$quant2 = $_POST['quant2'];
		}

		if (isset($_POST['price3'])) {
			$price3 = $_POST['price3'];
		}

		if (isset($_POST['quant3'])) {
			$quant3 = $_POST['quant3'];
		}

		if (strlen($price1) == 0 || strlen($quant1) == 0 || strlen($price2) == 0 || strlen($quant2) == 0 || strlen($price3) == 0 || strlen($quant3) == 0) {
			$output = "<p>All fields must have values!</p>";
			echo $output;
			exit;
		}

		$subtotal = round($price1 * $quant1 + $price2 * $quant2 + $price3 * $quant3, 2);
		$rate = 0.055;
		$tax = round($rate * $subtotal, 2);
		$total = round($subtotal + $tax, 2);

		echo "<p>Subtotal: $" . $subtotal . "<br>Tax: $" . $tax . "<br>Total: $" . $total . "</p>";
	}



?>