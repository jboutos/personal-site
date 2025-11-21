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

	<h3>Checkout calculator</h3>
	<p>Enter the price of item 1:</p>

	<div class='field'>
		<label>Price of item 1</label>
		<input type='number' name='price1' min='0.01' step='0.01'>
	</div>

	<p>Enter the quantity of item 1:</p>

	<div class='field'>
		<label>Quantity of item 1</label>
		<input type='number' name='quant1' min='1'>
	</div>

	<p>Enter the price of item 2:</p>

	<div class='field'>
		<label>Price of item 2</label>
		<input type='number' name='price2' min='0.01' step='0.01'>
	</div>

	<p>Enter the quantity of item 2:</p>

	<div class='field'>
		<label>Quantity of item 2</label>
		<input type='number' name='quant2' min='1'>
	</div>

	<p>Enter the price of item 3:</p>

	<div class='field'>
		<label>Price of item 3</label>
		<input type='number' name='price3' min='0.01' step='0.01'>
	</div>

	<p>Enter the quantity of item 3:</p>

	<div class='field'>
		<label>Quantity of item 3</label>
		<input type='number' name='quant3' min='1'>
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

		if (!is_numeric($price1) || !is_numeric($quant1) || !is_numeric($price2) || !is_numeric($quant2) || !is_numeric($price3) || !is_numeric($quant3)) {
			$output = "<p>Please enter valid numbers</p>";
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