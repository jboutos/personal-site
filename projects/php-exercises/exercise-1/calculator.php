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

	<h3>Simple calculator</h3>

	<?php echo "<p>Please enter the first number</p>"?>
	<div class='field'>
		<label>First number</label>
		<input type='number' name='number1'>
	</div>

	<?php echo "<p>Please enter the second number</p>"?>
	<div class='field'>
		<label>Second number</label>
		<input type='number' name='number2'>
	</div>

	<button type='submit' name='calculator-submit'>Submit</button>

</form>



<?php

if (isset($_POST["calculator-submit"])) {
	
	if (isset($_POST["number1"])) {
		$number1 = $_POST["number1"];
	}

	if (isset($_POST["number2"])) {
		$number2 = $_POST["number2"];
	}

	$add = floatval($number1) + floatval($number2);
	$sub = floatval($number1) - floatval($number2);
	$mul = floatval($number1) * floatval($number2);

	

	echo "$number1 + $number2 equals $add<br>";
	echo "$number1 - $number2 equals $sub<br>";
	echo "$number1 * $number2 equals $mul<br>";
	
	if ($number2 == 0) {
		$div = "Cannot divide by zero";
		echo $div;
	} else {
		$div = floatval($number1) / floatval($number2);
		echo "$number1 / $number2 equals $div<br>";
	}
}
?>