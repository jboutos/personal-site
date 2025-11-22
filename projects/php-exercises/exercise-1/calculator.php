<a href="?">
	<p>Reload page</p>
</a>

<a id='simple-calculator'></a>

<form action='index.php#simple-calculator' method='POST'>

	<h3>Simple calculator</h3>

	<p>Calculates the addition, subtraction, multiplication and division of two numbers</p>
	<div class='field'>
		<label for='first-number'>First number</label>
		<input id='first-number' type='number' name='number1'>
	</div>

	<div class='field'>
		<label for='second-number'>Second number</label>
		<input id='second-number' type='number' name='number2'>
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

		if (!is_numeric($number1) && !is_numeric($number2)) {
			echo "<p>I need some values for the numbers!</p>";
			exit;
		}

		if (!is_numeric($number1)) {
			echo "<p>I need a value for the first number!</p>";
			exit;
		}

		if (!is_numeric($number2)) {
			echo "<p>I need a value for the second number!</p>";
			exit;
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